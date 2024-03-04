<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" /><title>Inventory</title><style>table, th, td {border:1px solid black;}
th {background-color: green; color:white;}
		</style></head><body><h1>Inventory Management</h1>
<form action="" method="post">
	<table><thread><tr>
    <th>Tool</th><th>Delete</th></thread></tr><tbody>
    	<?php
			@$fp = fopen("inventory.txt", 'rb');	flock($fp, LOCK_SH); // lock file for reading
				if (!$fp) { echo "<p><strong>No Inventory.<br />Please try again later.</strong></p>".exit;}
				while (!feof($fp)) {	$tool = fgets($fp);
    			// Trim the line to remove leading/trailing whitespace
    			$tool = trim($tool);	if (!empty($tool)) { // Check if $tool is not empty
        									echo "<tr><td>" . $tool . '</td><td><input type="checkbox" name="delete[]" value="' . $tool . '"></td></tr>';}}
			flock($fp, LOCK_UN); /* release read lock*/ fclose($fp);
				if($_SERVER['REQUEST_METHOD'] == 'POST') {	$tools = $_POST['tools'];	$tools = htmlspecialchars ($tools);
				if (empty($tools)) {	echo '<p style="color:red">You did not enter any tools!</p>';
				}	else	{
			@ $fp =fopen("inventory.txt",'ab'); //write on the file
			if(!$fp){	echo'<h3>Order cannot be processed at this time</h3>'.exit;}
				$output_string=$tools."\n";	flock($fp, LOCK_EX);	fwrite($fp, $output_string, strlen($output_string));	flock($fp, LOCK_UN);	fclose($fp);
	//Redirect to refresh the page and display the updated table\\
	header("Location: {$_SERVER['REQUEST_URI']}");	exit;}}?>
	<tr><td><input type="text" name="tools" maxlength="20" /></td><td><input type="submit" value="Add" /></td></tr></tbody></table> 
		<input type="submit"value="Delete">
	<!-- JS to spice things up| This code makes the cursor to remain in the textfield after submitting the previews data-->
	<script type="text/javascript"> document.querySelector('input[name="tools"]').focus();</script>
</form><?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {		if (isset($_POST['delete'])) {
            $toolsToDelete = $_POST['delete'];		if (empty($toolsToDelete)) {
				echo '<p style="color:red">Select a Tool To delete!</p>';}else{
            	$fileContents = file("inventory.txt");
            	$newFileContents = [];		foreach ($fileContents as $line) {
                $line = trim($line);		if (!in_array($line, $toolsToDelete)) {
                    $newFileContents[] = $line;}}}
            // Write the updated contents back to the file
            file_put_contents("inventory.txt", implode("\n", $newFileContents));
			header("Location: {$_SERVER['REQUEST_URI']}");
                     exit;}}?></body></html>
					 <?php
				/*	 BUG Report 9/24/2023

					 •	The button “delete selected” does not show the error code when is empty, “Add new tool empty error” shows up instead
					 •	While a tool is selected and ready for deletion when the “Add new tool” is pressed deletes the entry as well as “Delete selected”
					 •	If the “Add new tool” is used to delete an entry it deletes the entry but when a new entry is added it gets appended to the last one unless the button is pressed twice to clear the deletion of the last entry
					 •	When html code is added to the tools it does not get rendered which is good, but then it cannot be deleted.
					 •	The “Delete selected button, also adds a file to the list”
					 */
					// the input submit they both do not have a name, perhaps a name will differentiate the button from each other
					 ?>