<?php if(!isset($lang)) exit("Direct file access is not allowed!"); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
	<div>
		<h2 class="mb-5"><?php echo $lang['menu_experience']; ?></h2>

		<div class="resume-item d-flex flex-column flex-md-row mb-5">
			<div class="resume-content mr-auto">
				<h3 class="mb-0"><?php echo $lang['zoiper']; ?></h3>
				<div class="subheading mb-3"><?php echo $lang['zoiper_position']; ?></div>
				<p><?php echo $lang['zoiper_body']; ?></p>
			</div>
			<div class="resume-date text-md-right">
				<span class="text-primary"><?php echo $lang['november']; ?> 2018 - <?php echo $lang['current_moment']; ?></span>
			</div>
		</div>

		<div class="resume-item d-flex flex-column flex-md-row mb-5">
			<div class="resume-content mr-auto">
				<h3 class="mb-0"><?php echo $lang['extracurricular_activity']; ?></h3>
				<div class="subheading mb-3"><?php echo $lang['noit']; ?></div>
				<p><?php echo $lang['extracurricular_activity_body_first']; ?></p>
				<p><?php echo $lang['extracurricular_activity_body_second']; ?></p>
			</div>
			<div class="resume-date text-md-right">
				<span class="text-primary"><?php echo $lang['september']; ?> 2013 - <?php echo $lang['june']; ?> 2018</span>
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