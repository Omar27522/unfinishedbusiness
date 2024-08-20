<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Inventory</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th { background-color: green; color: white; }
    </style>
</head>
<body>
    <h1>Inventory Mandagement</h1>
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th>Tool</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                @$fp = fopen("inventory.txt", 'rb');
                flock($fp, LOCK_SH); // lock file for reading
                if (!$fp) {
                    echo "<p><strong>No Inventory.<br />
                            Please try again later.</strong></p>";
                    exit;
                }
                while (!feof($fp)) {
                    $tool = fgets($fp);
                    // Trim the line to remove leading/trailing whitespace
                    $tool = trim($tool);
                    if (!empty($tool)) { // Check if $tool is not empty
                        echo "<tr><td>" . $tool . '</td>
                            <td><input type="checkbox" name="delete[]" value="' . $tool . '"></td>
                            </tr>';
                    }
                }
                flock($fp, LOCK_UN); // release read lock
                fclose($fp);

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['deleteTools'])) {
                        $toolsToDelete = $_POST['delete[]'];
                        if (empty($toolsToDelete)) {
                            echo '<p style="color:red">Select a Tool To delete!</p>';
                        } else {
                            $fileContents = file("inventory.txt");
                            $newFileContents = [];
                            foreach ($fileContents as $line) {
                                $line = trim($line);
                                if (!in_array($line, $toolsToDelete)) {
                                    $newFileContents[] = $line;
                                }
                            }
                            // Write the updated contents back to the file
                            file_put_contents("inventory.txt", implode("\n", $newFileContents));
                            // Redirect to refresh the page
                            header("Location: {$_SERVER['REQUEST_URI']}");
                            exit;
                        }
                    } elseif (isset($_POST['add'])) {
                        if (isset($_POST['tools'])) { // Check if 'tools' is set
                            $tools = $_POST['tools'];
                            $tools = htmlspecialchars($tools);
                            if (empty($tools)) {
                                echo '<p style="color:red">You did not enter any tools!</p>';
                            } else {
                                // Clear the file contents
                                file_put_contents("inventory.txt", "");
                                // Add new tool
                                @$fp = fopen("inventory.txt", 'ab');
                                if (!$fp) {
                                    echo '<h3>Order cannot be processed at this time</h3>';
                                    exit;
                                }
                                $output_string = $tools . "\n";
                                flock($fp, LOCK_EX);
                                fwrite($fp, $output_string, strlen($output_string));
                                flock($fp, LOCK_UN);
                                fclose($fp);
                                // Redirect to refresh the page
                                header("Location: {$_SERVER['REQUEST_URI']}");
                                exit;
                            }
                        }
                    }
                }
                ?>
                <tr>
                    <td><input type="text" name="tools" maxlength="20" /></td>
                    <td><input type="submit" name="add" value="Add New Tool" /></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" name="deleteTools" value="Delete Selected">
    </form>
</body>
</html>
