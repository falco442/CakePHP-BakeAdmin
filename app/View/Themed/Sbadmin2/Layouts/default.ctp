<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Titolo</title>

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->


			<?php
				echo $this->element('topbar');
				echo $this->element('sidebar');
			?>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
				<?php
					echo $this->Session->flash();
					echo $this->fetch('content');
				?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
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
