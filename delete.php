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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- script to add textboxes dynamically-->
    <script type="text/javascript" src="js/text.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<?php include 'headerlogin.php'; ?>

<div class="container marketing" id="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12">

            <div class="row">
                <div class="col-xs-4 myframe">
                    <h2>Enter all the details</h2>
                    <hr class="featurette-divider-small">
                    <form role="form" action="delete.php" method="post">
                        <div class="form-group">
                            <label for="host">Host / IP:</label>
                            <input type="text" class="form-control" name="host" placeholder="host/ip for database"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label for="user">User name:</label>
                            <input type="text" class="form-control" name="user" placeholder="username for database"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="pwd" placeholder="password for database"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label for="user">Database Name:</label>
                            <input type="text" class="form-control" name="db" placeholder="database name" required/>
                        </div>
                        <div class="form-group">
                            <label for="user">Table Name:</label>
                            <input type="text" class="form-control" name="table" placeholder="table name" required/>
                        </div>

                        <div class="form-group">
                            <label for="field1">Field1 Name:</label>
                            <input type="text" class="form-control" name="textbox1" placeholder="field1 name"/>
                        </div>
                        <div class="form-group">
                            <label for="field2">Field2 Name:</label>
                            <input type="text" class="form-control" name="textbox2" placeholder="field2 name"/>
                        </div>

                        <hr>

                        <div id='TextBoxesGroup'>
                            <div id="TextBoxDiv1" class="form-group">
                                <!--<label>Field3 name : </label>
                                <input type='text' id='textbox3' name='textbox3' class="form-control" placeholder="field3 name">-->
                            </div>
                        </div>
                        <input type='button' value='Add New Field' id='addButton' class="btn btn-default">
                        <input type='button' value='Remove Last Field' id='removeButton' class="btn btn-default">
                        <!--<input type='button' value='Get Value' id='getButtonValue' class="btn btn-default">-->
                                                
                        <hr>
                        <input type="submit" value="Generate" name="Generate" class="btn btn-info"/>
                    </form>
                </div>


                <div class="col-xs-7 myframe">
                    <h2>Generated code for deletion</h2>
                    <hr class="featurette-divider-small">
                    <?php
                    if (isset($_POST['Generate'])) {
                        $i = 0;
                        $sp = 6;
                        $host = $_POST['host'];
                        $user = $_POST['user'];
                        $pwd = $_POST['pwd'];
                        $db = $_POST['db'];
                        $field1 = $_POST['textbox1'];
                        $field2 = $_POST['textbox2'];
                        $table = $_POST['table'];
                        $msg = '&lt!doctype html&gt <br/>';

                        $msg .= '&lthtml lang="en"&gt <br/>';
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= '&lthead&gt <br/>';
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= '&ltmeta charset="utf-8"&gt <br/>';
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= '&ltmeta name="viewport" content="width=device-width; initial-scale=1.0"&gt <br/>';
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= '&lttitle&gt example &lt/title&gt <br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= '&lt/head&gt <br/><br/>';
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= '&ltbody&gt <br/>';
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= '&ltform action=' . "&lt?php echo \$_SERVER['PHP_SELF'];?>" . " method=\"post" . "\"/&gt" . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= '&ltlabel&gt' . $field1 . '&lt/label&gt';
                        $msg .= '&ltinput type="text" name="' . $field1 . '"/&gt' . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= '&ltlabel&gt' . $field2 . '&lt/label&gt';
                        $msg .= '&ltinput type="text" name="' . $field2 . '"/&gt' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= '&ltinput type="submit" value="submit"/&gt' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= '&lt/form&gt' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= '&lt/body&gt' . '<br/><br/>';
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= '&lt?php' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= "if(\$_POST) {" . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= "\$con=\"mysqli_connect(\"$host\",\"$user\",\"$pwd\",\"$db\")\"" . ";" . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= "if(\$con) {" . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= "\$sql=\"insert into $table values(\"\$$field1\",\"\$$field2\")\"" . ";" . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= "if(res=mysqli_query(\"\$con\",\"\$sql\")) {" . "<br/>";
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= 'echo "inserted successfully"' . ';' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= '}' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * $i);
                        $msg .= 'else {' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * ++$i);
                        $msg .= 'echo "insertion failed"' . ';' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= '}' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= '}' . '<br/>';
                        $msg .= str_repeat("&nbsp;", $sp * --$i);
                        $msg .= "?&gt" . "<br/><br/>";
                        $msg .= '&lt/html&gt' . '<br/>';
                        echo $msg;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>