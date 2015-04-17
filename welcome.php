<?php
session_start();
if (!isset($_SESSION['email']))
    header('Location:home.php');
?>

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
    <link href="offcanvas.css" rel="stylesheet">

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
<?php include 'headerlogin.php'; ?>

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>Hello, <h3 class="text-muted"><?php echo $_SESSION['email']; ?></h3></h1>
                <p>This is a website for automated generation of templates with some specific database operations. It
                    includes several feateres like templates with validated fields and operations such as insertion,
                    updating, display and some others.</p>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <h2>Crud Operations</h2>

                    <p>This is one of the main feature of our website. Here you can enter the fields necessary for you
                        and once after
                        submitting your fields you will get the complete code generated as per your need. </p>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-6 col-lg-4">
                    <h2>Validated Forms</h2>

                    <p>The code that is generated as per fields entered by you will be completely validated one both
                        server side and client side. Eg, the fields with not null will give error message if you don't
                        enter data in it. </p>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-6 col-lg-4">
                    <h2>Forum</h2>

                    <p>This is the platform where users can interact with each others and they can query the doubts they
                        have which will be solved by the website administrators as soon as possible. </p>

                </div>
                <!--/.col-xs-6.col-lg-4-->

            </div>
            <!--/row-->
        </div>
        <!--/.col-xs-12.col-sm-9-->

        <?php include 'sidebar.php'; ?>

    </div>
    <!--/row-->

</div>
<!--/.container-->

<?php include 'footer.php'; ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<script src="offcanvas.js"></script>
</body>
</html>