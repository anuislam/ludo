<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ludo Game-board</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style2.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container card">

        <!-- First row -->
        <div class="container-row1 clearfix">
        	<?php include(__DIR__.'/inc/user-four/user.php'); ?>
        	<?php include(__DIR__.'/inc/user-three/kot.php'); ?>
        	<?php include(__DIR__.'/inc/user-three/user.php'); ?>
        </div>

        <!-- Second row -->
        <div class="container-row2 clearfix">

        	<?php include(__DIR__.'/inc/user-four/kot.php'); ?>

            <div class="row2-col2">
                <!-- add triangular effect using html and css -->
                <div class="contain-triangles">
                    <div class="triangle-right"></div>
                    <div class="triangle-up"></div>
                    <div class="triangle-left"></div>
                    <div class="triangle-down"></div>
                </div>

            </div>

        <?php include(__DIR__.'/inc/user-two/kot.php'); ?>
		

        </div>

        <!-- Third row -->
        <div class="container-row3 clearfix">

        <?php include(__DIR__.'/inc/user-one/user.php'); ?>
        <?php include(__DIR__.'/inc/user-one/kot.php'); ?>
        <?php include(__DIR__.'/inc/user-two/user.php'); ?>

        </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
     <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
     <script src="assets/js/main.js" ></script>
</body>

</html>
