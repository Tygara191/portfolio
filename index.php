<?php
$now = new DateTime();

$birth = new DateTime('1999-06-25');
$since_it = new DateTime('2013-01-01');

$age = $now->diff($birth)->y;
$experience = $now->diff($since_it)->y;

include "skills.php";

if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
	$langCode = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	if(isset($_GET['lang'])) $langCode = $_GET['lang'];

	$langFilePath = 'lang/'.$langCode.'.php';

	if(is_file($langFilePath)){
		include $langFilePath;
	}
}

if(!isset($lang)) include "lang/en.php";

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

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none"></span>
			<span class="d-none d-lg-block">
				<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
			</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#about"><?php echo $lang['menu_short']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#experience"><?php echo $lang['menu_experience']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#education"><?php echo $lang['menu_education']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#skills"><?php echo $lang['menu_skills']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#softskills"><?php echo $lang['menu_soft_skills']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#awards"><?php echo $lang['menu_awards']; ?></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid p-0">
		<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
			<div class="my-auto">
				<h1 class="mb-0"><?php echo $lang['name']; ?>
					<span class="text-primary"><?php echo $lang['lastname']; ?></span>
				</h1>
				<div class="subheading mb-5"> 
					<a href="mailto:vnikolov@pkdevs.com">vnikolov@pkdevs.com</a>
				</div>
				
				<p class="mb-5"><?php echo $lang['intro']; ?></p>

				<ul class="list-inline list-social-icons mb-0 no-print">
					<li class="list-inline-item">
						<a target="_blank" href="https://www.facebook.com/404.user.not.foundd">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a target="_blank" href="https://github.com/Tygara191">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-github fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
				</ul>

				<ul class="list-inline list-languages no-print">
					<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Български"><a href="?lang=bg"><img src="img/bg.png"></a></li>
					<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="English"><a href="?lang=en"><img src="img/en.png"></a></li>
				</ul>

				<a href="pdf/<?php echo $lang['pdf_name']; ?>" target="_blank" class="btn btn-default btn-md btn-download no-print" role="button"><?php echo $lang['download_pdf']; ?></a>

				<div class="only-print">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-github fa-stack-1x fa-inverse"></i>
					</span>
					<span>https://github.com/Tygara191</span><br />

					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-facebook fa-stack-1x fa-inverse" style="color:white"></i>
					</span>
					<span>https://www.facebook.com/404.user.not.foundd</span><br />

					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-globe fa-stack-1x fa-inverse"></i>
					</span>
					<span>https://vnikolov.pkdevs.com</span>
				</div>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
			<div>
				<h2 class="mb-5"><?php echo $lang['menu_experience']; ?></h2>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0"><?php echo $lang['extracurricular_activity']; ?></h3>
						<div class="subheading mb-3"><?php echo $lang['noit']; ?></div>
						<p><?php echo $lang['extracurricular_activity_body_first']; ?></p>
						<p><?php echo $lang['extracurricular_activity_body_second']; ?></p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $lang['september']; ?> 2013 - <?php echo $lang['march']; ?> 2018</span>
					</div>
				</div>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0"><?php echo $lang['web_developer']; ?></h3>
						<div class="subheading mb-3"><?php echo $lang['freelance']; ?></div>
						<p><?php echo $lang['freelance_experience']; ?></p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $lang['may']; ?> 2016 - <?php echo $lang['august']; ?> 2016</span>
					</div>
				</div>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
			<div>
				<h2 class="mb-5"><?php echo $lang['menu_education']; ?></h2>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0"><?php echo $lang['pluni']; ?></h3>
						<div class="subheading mb-3"><?php echo $lang['software_engineering']; ?></div>
						<p><?php echo $lang['software_engineering_desc']; ?></p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $lang['september']; ?> 2018 - <?php echo $lang['current_moment']; ?></span>
					</div>
				</div>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0"><?php echo $lang['pgi']; ?></h3>
						<div class="subheading mb-3"><?php echo $lang['pgi_h1']; ?></div>
						<div><?php echo $lang['pgi_h2']; ?></div>
						<p><?php echo $lang['pgi_desc']; ?></p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $lang['september']; ?> 2013 - <?php echo $lang['may']; ?> 2018</span>
					</div>
				</div>

				<div class="resume-item d-flex flex-column flex-md-row">
					<div class="resume-content mr-auto">
						<h3 class="mb-0"><?php echo $lang['soupberon']; ?></h3>
						<div class="subheading mb-3"><?php echo $lang['soupberon_h1']; ?></div>
						<p><?php echo $lang['soupberon_desc']; ?></p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $lang['september']; ?> 2006 - <?php echo $lang['may']; ?> 2013</span>
					</div>
				</div>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
			<div>
				<h2 class="mb-5"><?php echo $lang['menu_skills']; ?></h2>
				
				<?php foreach($skill_cats as $skills_cat): ?>
					<div class="subheading mb-3"><?php echo $skills_cat['title']; ?></div>
					<ul class="list-inline list-icons">
						<?php foreach($skills_cat['skills'] as $key => $skill): ?>
							<li class="list-skills-item" data-toggle="tooltip" data-placement="top" title="<?php echo $skill['title']; ?>">
								<div class="icon">
									<i class="devicon-<?php echo $skill['icon']; ?>"></i>
								</div>
								<div class="progress-title">
									<div class="title"><?php echo $skill['title']; ?></div>
									<div class="progress">
									  <div class="progress-bar" role="progressbar" style="background: <?php echo $skill['color'] ?>;width: <?php echo $skill['percentage'] ?>%;" aria-valuenow="<?php echo $skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $skill['percentage'] ?>%</div>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endforeach; ?>

			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="softskills">
			<div>
				<h2 class="mb-5"><?php echo $lang['menu_soft_skills']; ?></h2>
				<div class="soft-skill">
					<div class="soft-skill-heading"><?php echo $lang['ss_presenting_h']; ?></div>
					<p><?php echo $lang['ss_presenting_desc']; ?></p>
				</div>

				<div class="soft-skill">
					<div class="soft-skill-heading"><?php echo $lang['ss_leader_h']; ?></div>
					<p><?php echo $lang['ss_leader_desc']; ?></p>
				</div>

				<div class="soft-skill">
					<div class="soft-skill-heading"><?php echo $lang['ss_communicative_h']; ?></div>
					<p><?php echo $lang['ss_communicative_desc']; ?></p>
				</div>

				<div class="soft-skill">
					<div class="soft-skill-heading"><?php echo $lang['ss_pressure_h']; ?></div>
					<p><?php echo $lang['ss_pressure_desc']; ?></p>
				</div>

				<div class="soft-skill">
					<div class="soft-skill-heading"><?php echo $lang['ss_learn_h']; ?></div>
					<p><?php echo $lang['ss_learn_desc']; ?></p>
				</div>

				<div class="soft-skill">
					<div class="soft-skill-heading"><?php echo $lang['ss_teacher_h']; ?></div>
					<p><?php echo $lang['ss_teacher_desc']; ?></p>
				</div>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
			<div>
				<h2 class="mb-5"><?php echo $lang['menu_awards']; ?></h2>

				<div class="subheading mb-3">2014</div>
				<div class="row">
					<div class="col-md-6">
						<img src="img/NOIT_2k14.JPG" style="width: 100%;">
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<p><?php echo $lang['awards_2014_desc']; ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<img src="img/gramota_2k14.jpg" style="width: 100%;">
							</div>
						</div>
					</div>
				</div>

				<div class="subheading mb-3">2017</div>
				<div class="row">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12">
								<p><?php echo $lang['awards_2017_noit']; ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<img src="img/gramota_2k17.jpg" style="width: 100%;">
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<img src="img/NOIT_2017.jpg" style="width: 100%;">
					</div>
				</div>
				<hr style="page-break-after: always;" />
				<div class="row">
					<div class="col-md-7">
						<img src="img/prezident.JPG" style="width: 100%;">
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
								<p><?php echo $lang['awards_2017_konkurs']; ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<img src="img/sertifikat_2k17.jpg" style="width: 100%;">
							</div>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
								<p><?php echo $lang['awards_2017_net']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<img src="img/NET.jpg" style="width: 100%;">
					</div>
				</div>
			</div>
		</section>
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