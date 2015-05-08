<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
    	<title>Share</title>
    </head>
    <body>
    	<center>
        	<br />
            <br />
             <div class="container">
             	<div class="well well-sm">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <h4>Select file to upload:</h4>
                        <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-default">
                        <p>Maximum 3MB</p>
                        <br />
                        <input type="submit" value="Upload File" name="submit" class="btn btn-default">
                    </form>
                    <hr style="border-width: 2px; border-color: #CFCFCF;" />
                    <?php
                        $dir = 'files/';
                        $files = glob($dir . '*.*');
                        echo "<h3>File list</h3>";
                        echo "<div class='fileList'><br />";
                        foreach($files as $file)
                        {
                            echo "<a class='fileList-List' href='" . $file . "'>" . $file . "</a><hr style='border-color: A3A3A3;' />";
                        }
                        echo "</div>";
                   ?>
                 </div>
             </div>
        </center>
    </body>
    <script src="js/jquery.js" />
</html>