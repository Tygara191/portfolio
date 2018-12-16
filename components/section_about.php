<?php if(!isset($lang)) exit("Direct file access is not allowed!");

$now = new DateTime();

$age = $now->diff(new DateTime('1999-06-25'))->y;
$experience = $now->diff(new DateTime('2013-01-01'))->y;

?>
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
	<div class="my-auto">
		<div class="row">
			<div class="col-md-2" id="main-pic-holder">
				<img src="img/profile.jpg" alt="Vesko Nikolov">
			</div>
			<div class="col-md-10">
				<h1 class="mb-0 heading-name"><?php echo $lang['name']; ?>
					<span class="text-primary"><?php echo $lang['lastname']; ?></span>
				</h1>
				<div class="subheading mb-5"> 
					<a href="mailto:vnikolov@pkdevs.com">vnikolov@pkdevs.com</a>
					<br />
					<a href="tel:+359-89-368-0167">+359-89-368-0167</a>
				</div>
				<div class="subheading mb-5"> 
					
				</div>
			</div>
		</div>
		
		<p class="mb-5"><?php echo sprintf($lang['intro'], $age, $experience); ?></p>

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
			<li class="list-inline-item">
				<a target="_blank" href="https://www.linkedin.com/in/vnikolovpk/">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-linkedin-in fa-stack-1x fa-inverse"></i>
					</span>
				</a>
			</li>
		</ul>

		<ul class="list-inline list-languages no-print">
			<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Български"><a href="?lang=bg"><img alt="bg" src="img/bg.png"></a></li>
			<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="English"><a href="?lang=en"><img alt="en" src="img/en.png"></a></li>
		</ul>

		<a href="pdf/<?php echo rawurlencode($lang['pdf_name']); ?>" target="_blank" class="btn btn-default btn-md btn-download no-print" role="button"><?php echo $lang['download_pdf']; ?></a>

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
				<i class="fa fa-linkedin-in fa-stack-1x fa-inverse" style="color:white"></i>
			</span>
			<span>https://www.linkedin.com/in/vnikolovpk</span><br />
      
  		<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-globe fa-stack-1x fa-inverse"></i>
			</span>
			<span>https://vnikolov.pkdevs.com</span>
		</div>
	</div>
</section>