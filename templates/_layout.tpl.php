<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>DBA02</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>s
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">DBA02</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="?controller=Survey">Umfrage</a></li>
            <?php if (\Session::isUserAuthed()) { ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Verwaltung</li>
                <li><a href="?controller=Admin\User">Benutzer</a></li>
                <li><a href="?controller=Admin\Survey">Umfrage</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Statistik</li>
                <li><a href="?controller=Admin\Stats">Umfrage</a></li>
              </ul>
             <?php } ?>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
				<li><a href="docs/html/index.html" target="_blank">Code Dokumentation</a></li>
            <?php if (\Session::isUserAuthed()) { ?>
				<li><a href="?controller=UserSession&action=Logout">Logout</a></li>
            <?php } else { ?>
            	<li><a href="?controller=UserSession&action=Login">Login</a></li>
            <?php } ?>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
	<?php include($this->includetemplate); ?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
