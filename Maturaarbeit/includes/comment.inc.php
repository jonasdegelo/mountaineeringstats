<?php
	include '../db.php';
	/**
	 * receive comment data from form
	 * write comment to database
	 */
	$id = $_POST['id'];
  $actid = $_POST['actid'];
  $commentText = $conn->real_escape_string($_POST['commentText']);
	$sql = "INSERT INTO comments (userID, actID, commentText)	VALUES ('$id', '$actid', '$commentText')";
	$result = $conn->query($sql);
	printf("Errormessage: %s\n", $conn->error);
?>