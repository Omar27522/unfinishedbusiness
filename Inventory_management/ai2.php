<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Inventory</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Inventory Madnagement</h1>
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
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['delete'])) {
                        $toolsToDelete = $_POST['delete'];
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
                            // Redirect to refresh the page and display the updated table
                            header("Location: {$_SERVER['REQUEST_URI']}");
                            exit;
                        }
                    }
                    if (isset($_POST['tools'])) {
                        $tools = $_POST['tools'];
                        $tools = htmlspecialchars($tools);
                        if (!empty($tools)) {
                            $fp = fopen("inventory.txt", 'ab');
                            if ($fp) {
                                $output_string = $tools . "\n";
                                flock($fp, LOCK_EX);
                                fwrite($fp, $output_string, strlen($output_string));
                                flock($fp, LOCK_UN);
                                fclose($fp);
                                // Redirect to refresh the page and display the updated table
                                header("Location: {$_SERVER['REQUEST_URI']}");
                                exit;
                            } else {
                                echo '<h3>Order cannot be processed at this time</h3>';
                            }
                        } else {
                            echo '<p style="color:red">You did not enter any tools!</p>';
                        }
                    }
                }

                // Display the inventory from the file
                $fp = fopen("inventory.txt", 'rb');
                flock($fp, LOCK_SH);
                if (!$fp) {
                    echo "<p><strong>No Inventory.<br />Please try again later.</strong></p>";
                } else {
                    while (!feof($fp)) {
                        $tool = fgets($fp);
                        $tool = trim($tool);
                        if (!empty($tool)) {
                            echo "<tr><td>" . htmlspecialchars($tool) . '</td><td><input type="checkbox" name="delete[]" value="' . htmlspecialchars($tool) . '"></td></tr>';
                        }
                    }
                    flock($fp, LOCK_UN);
                    fclose($fp);
                }
                ?>
            </tbody>
        </table>
        <tr>
            <td><input type="text" name="tools" maxlength="20" /></td>
            <td><input type="submit" value="Add" /></td>
        </tr>
        <input type="submit" name="deleteSubmit" value="Delete">
    </form>
    <!-- JS to spice things up | This code makes the cursor remain in the text field after submitting the previous data -->
    <script type="text/javascript">document.querySelector('input[name="tools"]').focus();</script>
</body>
</html>
