<?php if(!isset($lang)) exit("Direct file access is not allowed!"); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="softskills">
	<div>
		<h2 class="mb-5"><?php echo $lang['menu_soft_skills']; ?></h2>
		<?php foreach ($lang['soft_skills'] as $key => $skill): ?>
			<div class="soft-skill">
				<div class="soft-skill-heading"><?php echo $skill['h']; ?></div>
				<p><?php echo $skill['desc']; ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</section>