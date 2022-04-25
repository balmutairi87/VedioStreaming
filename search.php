<?php
session_start();
include "config.php";
if (isset($_GET['Logout'])) {
    session_destroy();
    header('Location: index.php');
}
if (isset($_POST['submit1'])) {
    $uname = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['psw']);
    if ($uname != "" && $password != "") {
        $sql_query = "select * from login where USERNAME='" . $uname . "' and PASSWORD='" . md5($password) . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);
        $id = $row['ID'];
        if ($row > 0) {
            $_SESSION['USERNAME'] = $uname;
            $_SESSION['ID'] = $id;
            header('Location: index.php');
        } else {
            echo "<script> alert('Invalid username and password');</script>";
        }
    }
}





?>





<!DOCTYPE html>
<html>
<title>Student Hub</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--important for media queries-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<head>

    <style>

    </style>

    <div class="header">

        <!-- LOGO CONTAINER -->
        <div class="container_logo">
            <img src="images/Logo.png" alt="zoom glass" height="60px" width="250px">
        </div>

        <!-- SEARCH BAR CONTAINER -->
        <form action="" method="POST">
            <div class="container_search">

                <div class="search_bar">
                    <div class="search_img">
                        <img src="images/search.png" alt="zoom glass" height="40px">
                    </div>
                    <input type="text" placeholder="Search for an item..." name="search">
                    <input type="button" value="submit" hidden>
                </div>
            </div>
        </form>

        <!--User details CONTAINER -->
        <div class="container_user">
            <P>Welcome, <?php if (isset($_SESSION['USERNAME'])) {
                            echo $_SESSION['ID'];
                        } else echo "User" ?></P>

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
                <li><a href="commingsoon.html">Live Stream</a></li>
                <?php
                if (!empty($_SESSION["USERNAME"])) {
                    echo '<li><a href="upload.php">Upload Video</a></li>';

                    echo '<li><a href="index.php?Logout=" name="Logout" id="Logout">Logout</a></li>';
                } else {
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
        Latest Videos
    </h1>
    <br>
    <div class="container" style="position: relative; margin-left: 7%">
        <?php
        if (isset($_POST['search'])) {
            $query = mysqli_real_escape_string($_POST['query']);
            $records =  mysqli_query($con, "select * from videos where video_Name LIKE %$query% ORDER BY video_id DESC ");
            while ($row = mysqli_fetch_assoc($records)) {
                $location = $row['video_Path'];
                $name = $row['video_Name'];
                $id = $row['video_Id'];
                echo "
          <div style='margin-left: 2%;float: left; overflow: hidden;'>
          <div class='mydivouter'>
          <video src='" . $location . "' controls width='320px' height='200px'></video>     
          <br>          
           <h2 style='text-align: center; color: white; margin-bottom: 5%; margin-top: auto;'>" . $name . "</h2>
           <a class='open-button mybuttonoverlap btn' style='margin-top:20%' onclick='openForm(" . $id . ")'>Comment</a>
           </div>
           </div>
    ";
            }
        } ?>
    </div>
    <div class="" style="float:left;">
        <h1>
            Popular
        </h1>
        <br>
        <!--pictures for the slideshow-->
        <input type="image" id="img" height="110" width="190" src="slideshow/img8.png" onclick="" onmouseover="outline-color:#2e75b6">
        <input type="image" id="img" height="110" width="190" src="slideshow/img5.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img3.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img3.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img5.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img7.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img9.png" onclick="">
    </div>
    <div class="" style="float:left;">
        <h1>
            Tips & Tricks
        </h1>
        <br>
        <!--pictures for the slideshow-->
        <input type="image" id="img" height="110" width="190" src="slideshow/img8.png" onclick="" onmouseover="outline-color:#2e75b6">
        <input type="image" id="img" height="110" width="190" src="slideshow/img5.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img3.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img3.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img5.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img7.png" onclick="">
        <input type="image" id="img" height="110" width="190" src="slideshow/img9.png" onclick="">
    </div>
    <div class="content">
        <!--extra space-->
        <br>
    </div>
    </div>
</body>
<footer style="text-align: center;">
    <br>
    <p>Student Hub © 2022 All Rights Reserved</p>
    <script>
        function openForm(x) {
            <?php if (!isset($_SESSION['USERNAME'])) { ?>
                document.getElementById("myForm").style.display = "block";

            <?php } else { ?>
                window.location.href = 'comment.php?id=' + x;
            <?php } ?>
        }
    </script>
</footer>

</html>