<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Les Arpenteurs d'Agartha">    
    <link rel="icon" type="image/gif" href="assets/img/fav.gif" />
	<meta name="description" content="Bienvenue sur le site de l'association: Les Arpenteurs d'Agartha. Nous animons des parties de trollball, Jeux de rôle et murder. Nous sommes situés sur Annecy, Grenoble et Chambéry" />
	<meta property="og:title" content="Les Arpenteurs d'Agartha" />
	<meta property="og:type" content="Site associatif" />
	<meta property="og:url" content="arpenteurs-dagartha.ovh" />
	<meta property="og:image" content="arpenteurs-dagartha.ovh/assets/img/titre.png" />
	<meta property="og:locale" content="fr_FR" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


	<?php
		include("textes/textes-navbar.php");
		include("textes/textes-index.php");
		include("textes/textes-trollball.php");
		include("textes/textes-creation.php");
		include("textes/textes-event.php");
		include("textes/textes-contact.php");
	  	$presta = $_GET["presta"];
	  	$crea = $_GET["crea"];
	?>

    <title><?php echo($titreH1);?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>


  <body>