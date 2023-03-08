<?php if(!isset($lang)) exit("Direct file access is not allowed!"); ?>

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
				<span class="text-primary"><?php echo $lang['september']; ?> 2018 - <?php echo $lang['may']; ?> 2022</span>
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