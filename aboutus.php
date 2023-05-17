<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Renting System</title>

    <!--icon for website-->
    <link rel="icon" href="images/logo.ico">

    <!--ionicons reference for icons in navigation bar-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--External style sheet specifically for navigation bar-->
    <link rel="stylesheet" href="./default.css" type="text/css">

    <!--External style sheet for applying custom google fonts-->
    <link rel="stylesheet" href="./customgooglefonts.css" type="text/css">
</head>

<body>
    <div id="header-package" class="container">
        <div class="logo">
            <img id="houselogo" src="images/headerlogo.PNG" alt="images/logo.ico" height="150px" width="150px">
        </div>
        <!--navigation  bar-->
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="./index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./maintenance.php">
                        <span class="icon"><ion-icon name="build-outline"></ion-icon></span>
                        <span class="text">Maintenance</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./gallery.php">
                        <span class="icon"><ion-icon name="image-outline"></ion-icon></span>
                        <span class="text">Gallery</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./amenities.php">
                        <span class="icon"><ion-icon name="bicycle-outline"></ion-icon></span>
                        <span class="text">Amenities</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./sustainability.php">
                        <span class="icon"><ion-icon name="water-outline"></ion-icon></span>
                        <span class="text">Sustainability</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./applynow.php">
                        <span class="icon"><ion-icon name="arrow-forward-circle-outline"></ion-icon></span>
                        <span class="text">Apply Now</span>
                    </a>
                </li>
                <li class="list">
                    <a href="./policy.php">
                        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                        <span class="text">Privacy Policy</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="text">About Us</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </div>

    <!--below script is for the navigation bar to move from one page to other and make the link active
    <script type="text/javascript" src="default.js"></script>-->

    <div id="about-us" class="container">
        <!--first person details-->
        <div class="profile-card">
            <div class="profile-image">
                <img src="images/akila.jpeg" alt="" height="200px" width="200px">
            </div>
            <div class="caption">
                <h3>Akila Dasari</h3>
                <p>Full Stack Java Developer</p>
                <div class="info">
                    <p>As a full stack Java developer, I am responsible for developing both the front-end and back-end of
                        web applications using the Java programming language. I have a solid understanding of both client-side
                        and server-side technologies.
                    </p>
                </div>
            </div>
        </div>
        <!--second person details-->
        <div class="profile-card">
            <div class="profile-image">
                <img src="images/achal.jpeg" alt="" height="200px" width="200px">
            </div>
            <div class="caption">
                <h3>Achal Gudapati</h3>
                <p>Full Stack Java Developer</p>
                <div class="info">
                    <p>As a beginner, I am trying to start with the basics of a programming language and practice frequently to
                        develop my skills.
                    </p>
                </div>
            </div>
        </div>
        <!--third person details-->
        <div class="profile-card">
            <div class="profile-image">
                <img src="images/dimple.jpeg" alt="" height="200px" width="200px">
            </div>
            <div class="caption">
                <h3>Dimple Sharma</h3>
                <p>Full Stack Java Developer</p>
                <div class="info">
                    <p>I have 5 years of experience in RPA, Devops, SQL, Proficy Server. I am doing the professional training on AWS</p>
                </div>
            </div>
        </div>
    </div>

    <!--For displaying contact details of each person-->
    <div id="contact-details">
        <div class="contact">
            <div class="person">
                <h2>Akila Dasari</h2>
                <p class="phone">+1 816-299-7686</p>
                <p>ID: 700738966</p>
                <p>AXD89660@UCMO.EDU</p>
            </div>
            <div class="person">
                <h2>Achal Gudapati</h2>
                <p class="phone">+1 913-742-3948</p>
                <p>ID: 700742825</p>
                <p>AXG28250@UCMO.EDU</p>
            </div>
            <div class="person">
                <h2>Dimple Sharma</h2>
                <p class="phone">+91 6281-678-288</p>
                <p>ID: 700745940</p>
                <p>DXS59400@UCMO.EDU</p>
            </div>
        </div>
    </div>

    <div class="office-hours">
        <table>
            <caption id="caption">Office Hours</caption>
            <tr>
                <td>Monday</td>
                <td>9am - 5pm</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>9am - 5pm</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>9am - 5pm</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>9am - 5pm</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>9am - 4pm</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>Closed</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td>Closed</td>
            </tr>
        </table>
    </div>

    <!--footer code is written separately as footer.html and is included here using php include method-->
    <?php
    include 'footer.html';
    ?>
</body>

</html>