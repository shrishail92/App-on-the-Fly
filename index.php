<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon.png">
    <title>Fist | Cover Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">
    <script src="js/popup.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="body" style="overflow:hidden;">
    <div id="abc">
        <!-- Popup Div Starts Here -->
        <div id="popupContact">
            <!-- Contact Us Form -->
            <div id="view">
                <img id="close" src="images/3.png" onclick="div_hide()">

                <h2>Features we provide:</h2>
                <hr>
                <ul>
                    <li>Automated generation of templates</li>
                    <li>Crud & many more operations</li>
                    <li>Responsive design</li>
                    <li>Free to use</li>
                    <li>Secured database</li>
                    <li>Help forum for novice</li>
                </ul>
            </div>
        </div>
        <!-- Popup Div Ends Here -->
    </div>
</div>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Welcome to A.T.G</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#" onclick="div_show()">Features</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Automated Template Generation</h1>
                <img src="images/logo.jpg" class="logo" id="myanim" height="150px" width="150px" alt="logo"/>
                <br/><br/>

                <p class="lead">This is a website for automated generation of templates with some specific database
                    operations. It includes several features like templates with validated fields and operations such as
                    insertion, updating, display and some others.</p>

                <p class="lead">
                    <a href="home.php" class="btn btn-lg btn-default">Enter &raquo;</a>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>All rights reserved by <a href="home.php"> APP { ON-THE-FLY } | App in just few
                            minutes </a>, &copy; copyright 2015.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
