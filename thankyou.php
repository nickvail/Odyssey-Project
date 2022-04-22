<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>The Maganvox Odyssey&#0153</title>
        <meta name="author" content="Nick Vaillancourt" />
        <meta name="desciprtion" content="Final project for COMP1002" />
        <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
        <!-- Shortcut icon courtesy of https://emumovies.com/files/file/3072-magnavox-odyssey-2d-cartridges-pack/ -->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header>
            <img id="sanders" src="images/sanders.png" width="85.6" height="78" alt="Sanders Associates logo" />
            <!-- Sanders Associates logo courtesy of https://www.testequipmentconnection.com/manufacturer/Sanders-Associates/Test-Set/ -->
            <img id="magna" src="images/magnavox.jpg" width="117.117" height="78" alt="Magnavox logo" />
            <!-- Magnavox logo courtesy of https://1000logos.net/magnavox-logo/ -->
            <!-- NAVIGATION -->
            <nav>
                <ul>
                    <li><a href="index.php" title="Home page">Home</a></li>
                </ul>
            </nav>
        </header>
        <!-- MAIN SECTION -->
        <main>
<?php
    $name = $_GET['name'];

    echo ('<h1 id="echo">Thank you, '.$name.', for your feedback!<br>Click home to return to the website.</h1>');
?>
        </main>
        <!-- FOOTER SECTION -->
        <footer>
            <p><small> ODYSSEY IS A TRADEMARK OF THE MAGNAVOX COMPANY, ©1972</small></p>
        </footer>
    </body>
</html>