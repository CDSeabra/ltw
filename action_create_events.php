<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php'); 
	include_once('database/events.php');

	//insert into events
	$stmt = $db->prepare('INSERT INTO events VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)');
	$stmt->execute(array(strip_tags($_POST['event_name']), strip_tags($_POST['event_date']), strip_tags($_POST['event_description']), strip_tags($_POST['event_type']), strip_tags($_POST['event_place']), strip_tags($_POST['event_start_time']), strip_tags($_POST['event_end_time']), strip_tags($_POST['private'])));  
	
	//==========================================================================================
	$target_dir = "images/";
	$target_file = $target_dir . strip_tags($_POST['id_event']) . "-" . basename(strip_tags($_FILES["fileToUpload"]["name"]));
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	//==========================================================================================
	
	//insert into imagens
	$last_id = $db->lastInsertId();
	$stmt2 = $db->prepare('INSERT INTO images VALUES (NULL, ? , ?)');
	echo "file: ". $_FILES['fileToUpload']['name'];
	echo "id: " . $last_id;
	$stmt2->execute(array( intval($last_id), strip_tags($_POST['id_event']) . "-" . strip_tags($_FILES['fileToUpload']['name'])));
	
	//insert into events_users
	$stmt3 = $db->prepare('INSERT INTO events_users VALUES ((SELECT id_user FROM users WHERE username = ?),?,(SELECT id_user FROM users WHERE username = ?),?)');
	$stmt3->execute(array($_SESSION	['username'], $last_id, $_SESSION['username'], 'owner'));  

	
	header('Location: events.php');	//redirecionar para home 
?>