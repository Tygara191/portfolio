<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}

if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
	$langCode = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	if(isset($_GET['lang'])) $langCode = $_GET['lang'];

	$langFilePath = 'lang/'.$langCode.'.php';

	if(is_file($langFilePath)){
		include $langFilePath;
	}
}

if(!isset($lang)) include "lang/en.php"; // Default language

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $lang['page_title']; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet"> -->
	<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

	<!-- Custom styles for this template -->
	<link href="css/resume.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.png">

	<?php if(isset($lang['head'])) echo $lang['head']; ?>

</head>

<body id="page-top">

	<?php include "components/navbar.php"; ?>

	<div class="container-fluid p-0">
		<?php include "components/section_about.php"; ?>
		<?php include "components/section_experience.php"; ?>
		<?php include "components/section_education.php"; ?>
		<?php include "components/section_skills.php"; ?>
		<?php include "components/section_softskills.php"; ?>
		<?php include "components/section_awards.php"; ?>
	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/resume.min.js"></script>

	<script src="js/custom.js"></script>

</body>

</html>