<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    
    <?php
		echo $this->Html->css(array(
			'/bower_components/bootstrap/dist/css/bootstrap.min',
			'/bower_components/metisMenu/dist/metisMenu.min',
			'/dist/css/sb-admin-2',
			'/bower_components/font-awesome/css/font-awesome.min'
		));
		echo $this->fetch('css');
    ?>

</head>

<body>

    <div class="container">
		<?= $this->fetch('content'); ?>
    </div>

    <?php 
		echo $this->Html->script(array(
			'/bower_components/jquery/dist/jquery.min',
			'/bower_components/bootstrap/dist/js/bootstrap.min',
			'/bower_components/metisMenu/dist/metisMenu.min',
			'/dist/js/sb-admin-2'
		));
		echo $this->fetch('script');
    ?>

</body>

</html>
