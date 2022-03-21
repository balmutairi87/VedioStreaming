<?php
session_start();
include "config.php";
if(isset($_GET['Logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<title>Student Hub</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--important for media queries-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<head>
	<div class="header">

        <!-- LOGO CONTAINER -->
        <div class="container_logo">
            <img src="images/Logo.png" alt="zoom glass" height="60px" width="250px">
        </div>

        <!-- SEARCH BAR CONTAINER -->
        <div class="container_search">

            <div class="search_bar">
                <div class="search_img">
                    <img src="images/search.png" alt="zoom glass" height="40px">
                </div>

                <input type="text" placeholder="Search for an item..." name="search">
            </div>
        </div>

        <!--User details CONTAINER -->
        <div class="container_user">
            <P>Welcome, <?php if(isset($_SESSION['USERNAME'])){echo $_SESSION['USERNAME'];}
            else echo "User"?></P>

            <div class="user_img">
                <img src="images/user.png" alt="user icon" height="60px">
            </div>
        </div>
    </div>

    <!-- NAV BAR -->
    <div class="nav">
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">Liked</a></li>
                <li><a href="">catagories</a></li>
			    <?php
                if(!empty($_SESSION["USERNAME"]))
                {
                    echo '<li><a href="index.php?Logout=" name="Logout" id="Logout">Logout</a></li>';

                }
                else
                {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
 <!--gives extra space-->
</head>
<body>
<script type="text/javascript" src="PPM.js"></script>
<h1>
Continue Watching
</h1>
<input type="image" id="img" height="110" width="190"  src="slideshow/img1.png" onclick="" onmouseover="mouseOver()">
<input type="image" id="img" height="110" width="190"  src="slideshow/img2.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img3.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img4.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img5.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img6.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img7.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img8.png" onclick="">
<h1>
Popular
</h1>
<br>
<!--pictures for the slideshow-->
<input type="image" id="img" height="110" width="190"  src="slideshow/img8.png" onclick="" onmouseover="outline-color:#2e75b6">
<input type="image" id="img" height="110" width="190"  src="slideshow/img5.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img3.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img3.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img5.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img7.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img9.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img8.png" onclick="">

<h1>
Comedy
</h1>

<input type="image" id="img" height="110" width="190"  src="slideshow/img1.png" onclick="" onmouseover="outline-color:#2e75b6">
<input type="image" id="img" height="110" width="190"  src="slideshow/img3.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img2.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img5.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img6.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img9.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img8.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img6.png" onclick="">

<h1>
Tips and Tricks
</h1>

<input type="image" id="img" height="110" width="190"  src="slideshow/img4.png" onclick="" onmouseover="outline-color:#2e75b6">
<input type="image" id="img" height="110" width="190"  src="slideshow/img2.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img2.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img6.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img7.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img3.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img2.png" onclick="">
<input type="image" id="img" height="110" width="190"  src="slideshow/img4.png" onclick="">
</div>
<div class="content"><!--extra space-->
<br>
</div>
</div>
</body>
<footer>
<p>Student Hub © 2022 All Rights Reserved
</footer>
</html>
