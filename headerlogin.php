<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/popupcontact.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">
    <script src="sweetalert-master/lib/sweet-alert.min.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div style="overflow:hidden;">
    <div id="abc">
        <!-- Popup Div Starts Here -->
        <div id="popupContact">
            <!-- Contact Us Form -->
            <form action=<?php echo $_SERVER['PHP_SELF']; ?> id="form" method="post" name="form">
                <img id="close" src="images/3.png" onclick="div_hide()">

                <h2>Contact Us</h2>
                <hr>
                <input id="name" name="name" placeholder="Name" type="text" required pattern="[a-zA-Z ]{1,30}"
                       title="Enter only characters">
                <input id="email" name="email" placeholder="Email" type="email" required>
                <input id="mobile" name="mobile" value="+91" placeholder="Mobile number [ optional ]" type="text" pattern="[+][0-9]{12}"
                       title="Enter 10 digit mobile number">
                <input id="subject" name="subject" placeholder="Subject [ optional ]" type="text">
                <textarea id="msg" name="message" placeholder="Message" required></textarea>
                <input type="submit" value="send" name="contactus" id="submitbutton" onclick="progress()">
                <!--<button type="submit" class="b button-primary" name="contactus" id="submitbutton" onclick="progress()">
                    <i class="glyphicon glyphicon-send"></i> send
                </button>-->
                <div id="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                         aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">99% Complete</span>
                    </div>
                </div>
            </form>

        </div>
        <!-- Popup Div Ends Here -->
    </div>
</div>
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
            <a class="navbar-brand" href="welcome.php">APP { ON-THE-FLY }</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="welcome.php">Home</a></li>
                <li><a href="#about">Profile</a></li>
                <li><a href="insert.php">Insert</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#" onclick="div_show()">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="post" action="logout.php">
                <input type="submit" name="signout" class="btn btn-success" value="Sign out">
            </form>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
</body>
</html>