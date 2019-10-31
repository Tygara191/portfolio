<?php if(!isset($lang)) exit("Direct file access is not allowed!");

$now = new DateTime();

$djangoExperience = $now->diff(new DateTime('2014-06-01'))->y;
$mySQLExperience = $now->diff(new DateTime('2013-09-15'))->y;
$phpExperience = $now->diff(new DateTime('2013-09-15'))->y;


$skillCategories = [
	[
		'title' => "Android",
		'img' => 'img/android.png',
		'pbreak' => false,
		'desc' => $lang['skills_android'],
		'color' => "#A4C639"
	],
	[
		'title' => "Frontend",
		'img' => 'img/frontend.png',
		'pbreak' => false,
		'desc' => $lang['skills_frontend'],
		'color' => "#F16625",

		'skills' => [
			['title' => "Bootstrap", 'desc' => $lang['skills_bootstrap']],
			['title' => "ReactJS", 'desc' => $lang['skills_reactjs']]
		]
	],
	[
		'title' => "Backend",
		'img' => 'img/backend.png',
		'pbreak' => false,
		'desc' => $lang['skills_backend'],
		'color' => "#44d6eb",

		'skills' => [
			['title' => "PHP", 'desc' => sprintf($lang['skills_php'], $phpExperience)],
			['title' => "Codeigniter", 'desc' => $lang['skills_codeigniter']],
			['title' => "Twig", 'desc' => $lang['skills_twig']],
			['title' => "Python", 'desc' => $lang['skills_python']],
			['title' => "Django", 'desc' => sprintf($lang['skills_django'], $djangoExperience)],
			['title' => "JavaScript", 'desc' => $lang['skills_javascript']],
			['title' => "Express JS", 'desc' => $lang['skills_express']],
			['title' => "MySQL", 'desc' => sprintf($lang['skills_mysql'], $mySQLExperience)],
			['title' => "MongoDB", 'desc' => $lang['skills_mongodb']],
			['title' => "REST", 'desc' => $lang['skills_rest']]
		]
	],
	[
		'title' => $lang['skills_other'],
		'img' => 'img/other.png',
		'pbreak' => false,
		'desc' => $lang['skills_other_d'],
		'color' => "#EABA6F",

		'skills' => [
			['title' => "Git", 'desc' => $lang['skills_git']],
			['title' => "WordPress", 'desc' => $lang['skills_wordpress']],
			['title' => "Windows", 'desc' => $lang['skills_windows']],
			['title' => "Kubuntu", 'desc' => $lang['skills_kubuntu']],
			['title' => "Jira", 'desc' => $lang['skills_jira']],
			['title' => "Crucible", 'desc' => $lang['skills_crucible']],
			['title' => "Docker", 'desc' => $lang['skills_docker']]
		]
	]
]

?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
	<div>
		<h2 class="mb-5"><?php echo $lang['menu_skills']; ?></h2>
		<?php foreach ($skillCategories as $category): ?>
			<div class="skills-category" style="border-color: <?php echo $category['color']; ?>;<?php if ($category['pbreak']): ?>page-break-after: always;<?php endif; ?>">
				<div class="heading">
					<img src="<?php echo $category['img']; ?>" alt="<?php echo $category['title']; ?>">
					<h3 style="color: <?php echo $category['color']; ?>"><?php echo $category['title'] ?></h3>
				</div>
				<div class="content">
					<p><?php echo $category['desc'] ?></p>
					<?php if (isset($category['skills']) && count($category['skills']) > 0): ?>
						<ul>
							<?php foreach ($category['skills'] as $skill): ?>
								<li><strong><?php echo $skill['title']; ?></strong> - <?php echo $skill['desc']; ?></li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
				</div>
			</div>
			
		<?php endforeach ?>
	</div>
</section>