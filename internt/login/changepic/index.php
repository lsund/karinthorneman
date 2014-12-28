<!doctype html>
<html>
    <head>
        <title>Karin Thorneman - Ändra bilder</title>
		<meta charset="utf-8">
    </head>
    <body>
        <?php
            session_start();

            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
                echo "<p>please log in to see this page</p>";
                die();
            }

        ?>
		<h1>Ändra bild</h1>
        <form action="../index.php">
            <input type="submit" value="Tillbaka" />
		</form>
		<hr>
		<h2>Hem</h2>
        <form   enctype="multipart/form-data" 
                action="homeuploader.php" 
                method="post">
            <input  type="file" 
                    name="uploadedfile" />
            </br>
            </br>
            <p>Ge bilden under hem en beskrivning:</p>
            <textarea 	name="description" 
						value="" 
						rows="3" 
						cols="50" 
						wrap="physical"></textarea>
            </br>
            </br>
            <input  type="submit" 
                    value="Ladda upp" />
        </form>
		<h2>Om</h2>
        <form   enctype="multipart/form-data" 
                action="aboutuploader.php" 
                method="post">
            <input  type="file" 
                    name="uploadedfile" />
            </br>
            </br>
            <input  type="submit" 
                    value="Ladda upp" />
        </form>
    </body>
</html>
