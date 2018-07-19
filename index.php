<?php
$now = new DateTime();

$birth = new DateTime('1999-06-25');
$since_it = new DateTime('2013-01-01');

$age = $now->diff($birth)->y;
$experience = $now->diff($since_it)->y;

include "skills.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Веселин Николов - Персонална страница</title>

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
					<a class="nav-link js-scroll-trigger" href="#about">Накратко</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#experience">Опит</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#education">Образование</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#skills">ИТ умения</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#secondarySkills">Други умения</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#goodbad">В какво съм добър</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#awards">Отличия</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid p-0">
		<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
			<div>
				<h1 class="mb-0">Веселин
					<span class="text-primary">Николов</span>
				</h1>
				<div class="subheading mb-5"> 
					<a href="mailto:vnikolov@pkdevs.com">vnikolov@pkdevs.com</a>
				</div>
				<p class="mb-5">Аз съм мотивиран млад IT специалист и софтуерен инженер, целящ да се развива в технологичната сфера. В момента съм на <?php echo $age; ?> години, а последните <?php echo $experience; ?> от тях съм прекарал в активни IT занимания, макар и непрофесионални.</p>
				<ul class="list-inline list-social-icons mb-0">
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-github fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
			<div>
				<h2 class="mb-5">Опит в ИТ сферата</h2>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0">Извънкласна дейност</h3>
						<div class="subheading mb-3">НОИТ</div>
						<p>По време на цялото си гимназиално образование, аз участвах ежегодно в <a href="http://edusoft.fmi.uni-sofia.bg/" target="_blank">НОИТ</a> с разнообразни проекти и разработки, като при първото ми участие ми бе връчен сребърен медал. Също така взех и участие в <a href="https://ntit.npmg.org/" target="_blank">НЕТ "Джон Атанасов"</a> през 2017 година и бях поставен на първо място в категорията си. По време на участията си получих и други отличия.</p>
						<p>Този период беше много ценен и за моите комуникативни умения, както с някои от учителите, които често се допитваха до мен за техническа помощ и съвети, така и с новодошлите всяка година ученици в ИТ отбора в училище, които най-често аз въвеждах в програмирането. Вземах и активно участие в теоретичната им подготовка. Това ме научи да работя с по-неопитни хора от мен и да изразявам сложни принципи по разбираем начин.</p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary">Септември 2013 - Март 2018</span>
					</div>
				</div>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0">Уеб разработчик</h3>
						<div class="subheading mb-3">На свободен принцип</div>
						<p>През лятото на 2016 година се почувствах достатъчно уверен в себе си, че да се опитам да предложа услуги на freelance пазара. През този период разработих wordpress фирмен сайт, един относително голям проект с PHP/Codeigniter и един онлайн магазин, базиран на Python/Django. Предвид условията, при които работех, не мога да разкрия повече детайли за проектите.</p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary">Май 2017 - Август 2017</span>
					</div>
				</div>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
			<div>
				<h2 class="mb-5">Образование</h2>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0">Пловдивски университет "Паисий Хилендарски"</h3>
						<div class="subheading mb-3">Софтуерно инженерство</div>
						<p>След излезлите на 10.07.2018г. резултати от кандидатстудентските изпити, мога да нарека себе си и студент в <a href="https://uni-plovdiv.bg/" target="_blank">Пловдивски университет</a> със специалност <a href="https://uni-plovdiv.bg/pages/index/1131/" target="_blank">Софтуерно инженерство</a>.</p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary">Септември 2018 - Настоящия момент</span>
					</div>
				</div>

				<div class="resume-item d-flex flex-column flex-md-row mb-5">
					<div class="resume-content mr-auto">
						<h3 class="mb-0">Професионална гимназия по икономика - гр. Перник</h3>
						<div class="subheading mb-3">Икономическа информатика</div>
						<div>Извънкласни дейности - уеб и мобилна разработка</div>
						<p>В <a href="" target="_blank">ПГИ</a> интересът ми към ИТ се превърна в професионална насока. По време на обучението ми там, училището се изяви като водеща ИТ гимназия в Перник, за което моята отдаденост през тези години допринесе значително.</p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary">Септември 2013 - Май 2018</span>
					</div>
				</div>

				<div class="resume-item d-flex flex-column flex-md-row">
					<div class="resume-content mr-auto">
						<h3 class="mb-0">СОУ „Д-р Петър Берон”</h3>
						<div class="subheading mb-3">Основно образование</div>
						<p>Най-ценното нещо, което получих по време на основното ми образование в <a href="http://www.soupetarberon.info/" target="_blank">СУ с разширено изучаване на чужди езици „Д-р Петър Берон”</a> е добро познание на английски език, както и основно ниво руски език. Също така там направих първите крачки към изучаването на HTML.</p>
					</div>
					<div class="resume-date text-md-right">
						<span class="text-primary">Септември 2006 - Май 2013</span>
					</div>
				</div>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
			<div>
				<h2 class="mb-5">ИТ умения</h2>
				
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

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="secondarySkills">
			<div>
				<h2 class="mb-5">Други умения</h2>
				<p>Освен ИТ, хобитата ми включват: електротехника, механика и автомобили, аудио техника и диджейство. Свържете се с мен ако Ви трябва човек, който да има компетенции и в тези сфери.</p>
				<p>Още нещо, което си заслужава да се спомене е умението ми да разделя определена работа между група хора и да определям ефективно задачите на всеки.</p>
			</div>
		</section>

		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="goodbad">
			<div>
				<h2 class="mb-5">В какво съм добър и в какво не съм?</h2>
				<div class="subheading mb-3">Добър съм в...</div>
				<ul>
					<li>Това да карам нещата да работят. Аз съм този, който взема нещо красиво и му придава функционалност.</li>
					<li>Винаги се старая да свършвам поставената задача по най-добрия възможен начин.</li>
				</ul>
				<div class="subheading mb-3">Не съм чак толкова добър в...</div>
				<ul>
					<li>Тъй като съм човек на точните науки, всякакъв вид creative и дизайнерска работа не ми се отдава особено. Умея да направя приличен дизайн, когато това изрично се налага, но за мен това е неприятна и трудна работа, която предпочитам да не върша.</li>
				</ul>
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