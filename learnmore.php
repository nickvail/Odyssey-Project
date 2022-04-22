<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>The Maganvox Odyssey&#0153</title>
        <meta name="author" content="Nick Vaillancourt" />
        <meta name="desciprtion" content="Final project for COMP1002" />
        <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
        <link href="css/gallery.css" rel="stylesheet" />
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
                <img id="display" src="images/display.jpeg" width="750" height="606" alt="A display of Odyssey and its main components" />
                <!-- Image courtesy of https://americanhistory.si.edu/collections/search/object/nmah_1302004 -->
                <!-- PRODUCT INFORMATION -->
                <p class="desc">Developed by Sanders Associates and produced by Magnavox, Odyssey&#0153 brings hours of fun and education right into your living room! With action, sports, puzzles, and more, Odyssey&#0153 has something for everyone.</p>
                <!-- PACKAGE INCLUDES -->
                <p class="desc">Your Odyssey&#0153 comes with:</p> <br>
                <ul id="list">
                    <li>Odyssey&#0153 Console</li>
                    <li>Two (2) controllers</li>
                    <li>Six (6) batteries</li>
                    <li>Switch box to switch between your television and your Odyssey&#0153</li>
                    <li>Six (6) pin out cards containing twelve (12) games</li>
                    <li>Eleven (11) in-color game overlays (viewable below)</li>
                </ul>
                <p class="desc">Available at any Magnavox licensed retailer near you for just <span class="price">$99.99</span>. Accessories sold seperately.</p>
            </section>
            <br>
            <br>
             <!-- SLIDESHOW -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 12</div>
                    <img src="images/overlays/analogic.jpg" style="width:100%">
                    <div class="text">Analogic</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 12</div>
                    <img src="images/overlays/catandmouse.jpg" style="width:100%">
                    <div class="text">Cat and Mouse</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 12</div>
                    <img src="images/overlays/football.jpg" style="width:100%">
                    <div class="text">Football</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 12</div>
                    <img src="images/overlays/hauntedhouse.jpg" style="width:100%">
                    <div class="text">Haunted House</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 12</div>
                    <img src="images/overlays/hockey.jpg" style="width:100%">
                    <div class="text">Hockey</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">6 / 12</div>
                    <img src="images/overlays/roulette.jpg" style="width:100%">
                    <div class="text">Roulette</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">7 / 12</div>
                    <img src="images/overlays/simonsays.jpg" style="width:100%">
                    <div class="text">Simon Says</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">8 / 12</div>
                    <img src="images/overlays/ski.jpg" style="width:100%">
                    <div class="text">Ski</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">9 / 12</div>
                    <img src="images/overlays/states.jpg" style="width:100%">
                    <div class="text">States</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">10 / 12</div>
                    <img src="images/overlays/submarine.jpg" style="width:100%">
                    <div class="text">Submarine</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">11 / 12</div>
                    <img src="images/overlays/tabletennis.jpg" style="width:100%">
                    <div class="text">Table Tennis (no overlay)</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">12 / 12</div>
                    <img src="images/overlays/tennis.jpg" style="width:100%">
                    <div class="text">Tennis</div>
                </div>
                <!-- ARROWS -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <!-- Game overlays courtesy of https://www.videogameconsolelibrary.com/pg70-odyssey.htm#page=games -->
            <br>
            <!-- BULLETS -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
                <span class="dot" onclick="currentSlide(10)"></span>
                <span class="dot" onclick="currentSlide(11)"></span>
                <span class="dot" onclick="currentSlide(12)"></span>
            </div>
        </main>
        <!-- FOOTER SECTION -->
        <footer>
            <p><small> ODYSSEY IS A TRADEMARK OF THE MAGNAVOX COMPANY, ©1972</small></p>
        </footer>
        <script src="js/gallery.js"></script> 
    </body>
</html>