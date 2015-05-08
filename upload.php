<?php
	echo "<link rel='stylesheet' href='css/bootstrap.css' />";
	echo "<link rel='stylesheet' href='css/style.css' />";
	$target_dir = "files/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(isset($_POST["submit"]))
	{
		//Check if file exists
		if (file_exists($target_file))
		{
			echo "<br /><br /><center>";
			echo "<div class='well well-sm'>";
			echo "<br /><br /><p>The file you have tried upload already exists!</p><br /><br />";
			echo "</div></center>";
			$uploadOk = 0;
		}
		else
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			{
				echo "<center><br /><br /><div class='well well-sm'>";
				echo "<p>The file " . basename($_FILES["fileToUpload"]["name"]). " has been uploaded.</p><br />";
				$link = "http://kemsly.org/share/files/";
				echo "<p>View your file click here :</p><form action='" . $link . basename($_FILES["fileToUpload"]["name"]) . "'><input class='btn btn-default' type='submit' value='View File'></form>";
				echo "<p>Share your file with the fallowing link: <a target='_blank' href=" . $link . basename($_FILES["fileToUpload"]["name"]) . ">" . $link . basename($_FILES["fileToUpload"]["name"]) . "</a></p>";
				echo "</div></center>";
					
			}
			else
			{
				echo "Sorry, there was an error uploading the file, try again in 5 minutes!";	
			}
		}
	}
?>