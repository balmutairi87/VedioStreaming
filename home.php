<?php
session_start();
include "config.php";

// Check user login or not
if(!isset($_SESSION['USERNAME'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['Logout'])){
    session_destroy();
    header('Location: index.php');
}

if(isset($_POST['home'])){
     header('Location: index.php');
}
?>

<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>
        Dashboard
    </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>

<body>
<div id="login">
    <h3 class="text-center text-white pt-5"></h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <i><h3 class="text-center text-info">Welcome to Dashboard</h3></i>
                        <h4 class="text-center text-info">You are Logged in as: <?php echo $_SESSION['USERNAME']?></h4>
                        <h6 class="text-center text-info">Full Functionality will be available soon, Click to Log Off</h6>
                        <div class="form-group">
                            <br>
                            <br>
                            <center><input type="submit" name="home" class="btn btn-info btn-md" value="Home"></center>
                            <br>
                            <center><input type="submit" name="Logout" class="btn btn-info btn-md" value="Logout"></center>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>