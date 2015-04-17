<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">
    <script src="sweetalert-master/lib/sweet-alert.min.js"></script>
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4">
            <!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus
                                       required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Re-enter Password" name="vpass" type="password"
                                       required>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register"
                                   name="register">

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="home.php">Go back to login</a></center>
                    <!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php

include("database/db_conection.php");//make connection here
if (isset($_POST['register'])) {
    $user_name = $_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass = $_POST['pass'];//same
    $verify_pass = $_POST['vpass'];
    $user_email = $_POST['email'];//same


    if ($user_name == '') {
        //javascript use for input checking
        ?>
        <script type='text/javascript'>
            swal("Oops...!", "Please enter name. Try again!", "error");
        </script>
        <?php
        exit();//this use if first is not work then other will not show
    }

    if ($user_pass == '') {
        ?>
        <script type='text/javascript'>
            swal("Oops...!", "Please enter password. Try again!", "error");
        </script>
        <?php
        exit();
    }

    if ($user_email == '') {
        ?>
        <script type='text/javascript'>
            swal("Oops...!", "Please enter email. Try again!", "error");
        </script>
        <?php
        exit();
    }
    if ($user_pass != $verify_pass) {
        ?>
        <script type='text/javascript'>
            swal("Oops...!", "Passwords are mismatching. Enter again !.", "error");
        </script>
        <?php
        exit();
    }
    //here query check weather if user already registered so can't register again.
    $check_email_query = "select * from users WHERE email='$user_email'";
    $run_query = mysqli_query($dbcon, $check_email_query);

    if (mysqli_num_rows($run_query) > 0) {
        ?>
        <script type='text/javascript'>
            swal("Oops...!", "This email already exist in our database, Please try another one!", "error");
        </script>
        <?php
        exit();
    }
    //insert the user into the database.
    $insert_user = "insert into users VALUES ('$user_name','$user_email','$user_pass')";
    if (mysqli_query($dbcon, $insert_user)) {
        echo "<script>window.open('home.php','_self')</script>";
    }

}

?>