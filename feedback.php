<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>The Maganvox Odyssey&#0153</title>
        <meta name="author" content="Nick Vaillancourt" />
        <meta name="desciprtion" content="Final project for COMP1002" />
        <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
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
                    <li><a href="learnmore.php" title="Learn more about the Odyssey">Learn More</a></li>
                    <li><a href="aboutus.php" title="Information about Sanders Associates, Inc.">About Us</a></li>
                    <li><a href="feedback.php" title="Send us feedback">Have Feedback?</a></li>
                    <li><a href="customersupport.php" title="Contact information and support">Customer Support</a></li>
                </ul>
            </nav>
        </header>
        <!-- MAIN SECTION -->
        <main>
            <section>
                <h1 class="give">Have any feedback on our<br>product? Feel free to complete this form!</h1>
            </section>
            <br>
            <form action="thankyou.php">
            <fieldset>
                <!-- ENTER NAME -->
                <div>
                    <label id="nameLabel" for="name">Name:</label>
                    <input type="text" name="name" class="name" size="25" maxtype="20" placeholder="Enter your name" required maxlength="20" />
                </div>
                <br>
                <!-- ENTER EMAIL -->
                <div>
                    <label id="emailLabel" for="email">E-mail:</label>
                    <input type="text" name="email" class="email" size="25" maxtype="30" placeholder="Enter your e-mail" required maxlength="20" />
                </div>
                <br>
                <!-- COMMENTS -->
                <div id="comments">
                    <label for="comments">Comments:</label>
					<textarea id="comments" name="comments" rows="10" cols="24" placeholder="Tell us how you feel" required></textarea>
                </div>
                <!-- Submit -->
                <input id="submit" type="submit" value="Submit">
            </fieldset>
        </main>
        <!-- FOOTER SECTION -->
        <footer>
            <p><small> ODYSSEY IS A TRADEMARK OF THE MAGNAVOX COMPANY, ©1972</small></p>
        </footer>
    </body>
</html> 