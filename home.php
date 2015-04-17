<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>APP ON THE FLY</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
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

<?php include 'header.php' ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>

        <p>This is a website for automated generation of templates with some specific database operations. It includes
            several feateres like templates with validated fields and operations such as insertion, updating, display
            and many more.
            Here we are feautering a demo of simple insert form. Click the button below to feel it.</p>

        <p><a class="btn btn-primary btn-lg" href="generate.php" role="button">demo &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Database Operations</h2>

            <p>This is one of the main feature of our website. Here you can enter the fields necessary for you and once
                after
                submitting your fields you will get the complete code generated as per your need. </p>

        </div>
        <div class="col-md-4">
            <h2>Validated Forms</h2>

            <p>The code that is generated as per fields entered by you will be completely validated one both server side
                and client side. Eg, the fields with not null will give error message if you don't enter data in it.</p>

        </div>
        <div class="col-md-4">
            <h2>Forum</h2>

            <p>This is the platform where users can interact with each others and they can query the doubts they have
                which will be solved by the website administrators as soon as possible.</p>

        </div>
    </div>


</div>
<!-- /container -->
<?php include 'footer.php' ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
