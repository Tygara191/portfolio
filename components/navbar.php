<?php if(!isset($lang)) exit("Direct file access is not allowed!"); ?>

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