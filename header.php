<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">
<script src="sweetalert-master/lib/sweet-alert.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">APP { ON-THE-FLY }</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" method="post">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" placeholder="Password" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn btn-success">Sign in</button>
                <a href="registration.php" name="signup" class="btn btn-success">Sign up</a>
            </form>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>
</body>
</html>

<?php

include("database/db_conection.php");

if (isset($_POST['login'])) {
    $user_email = $_POST['email'];
    $user_pass = $_POST['pass'];

    $check_user = "select * from users WHERE email='$user_email'AND password='$user_pass'";

    $run = mysqli_query($dbcon, $check_user);

    if (mysqli_num_rows($run)) {
        session_start();
        echo "<script>window.open('welcome.php','_self')</script>";
        $_SESSION['email'] = $user_email;//here session is used and value of $user_email store in $_SESSION.
    } else {
        ?>
        <script type='text/javascript'>
            swal("Oops...!", "User name or Password is wrong. Try again !.", "error");
        </script>
        <?php
    }
}
?>