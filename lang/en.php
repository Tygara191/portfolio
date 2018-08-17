
<?php ob_start(); ?>
<style>
	body{
		font-family: Muli,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';

	}
	h1, h2, h3, h4, h5, h6 {
	    font-family: 'Saira Extra Condensed',serif;
	    font-weight: 700;
	    text-transform: uppercase;
	    color: #343a40;
	}
	h3{
		font-family: "verdana";
		font-weight: 550;
		font-size: 1.5rem
	}
</style>
<?php $lang['head'] = ob_get_clean(); ?>

<?php ob_start(); ?><a href="http://edusoft.fmi.uni-sofia.bg/" target="_blank" data-toggle="tooltip" data-placement="top" title="NOIT or National Olympiad of IT is the single biggest IT competition for students in Bulgaria.">NOIT</a><?php $lang['NOIT_link_full'] = ob_get_clean(); ?>

<?php ob_start(); ?><a href="https://ntit.npmg.org/" target="_blank" data-toggle="tooltip" data-placement="top" title="NET or National Fall Tournament &quot;John Atanasov&quot; is one of few competitions present in the Ministry of Education and Science's calendar.">NET "John Atanasov"</a><?php $lang['NET_link_full'] = ob_get_clean();

$lang['download_pdf'] = "Download PDF";
$lang['pdf_name'] = "Veselin Nikolov - Personal webpage.pdf";
$lang['page_title'] = "Veselin Nikolov - Personal webpage";
$lang['menu_short'] = "Intro";
$lang['menu_experience'] = "Experience";
$lang['menu_education'] = "Education";
$lang['menu_skills'] = "Skills";
$lang['menu_soft_skills'] = "Soft skills";
$lang['menu_awards'] = "Awards";
$lang['name'] = "Veselin";
$lang['lastname'] = "Nikolov";
$lang['intro'] = "I am a motivated young IT specialist and software engineer with a clear goal to grow in the IT sector. Currently ".$age." years old, I've divoted the last ".$experience." of them to constant IT activities. I read, write, understand and speak English fluently. My hobbies include electronics, mechanics, cars, audio gear and DJing.";
$lang['extracurricular_activity'] = "Extracurricular activity";
$lang['extracurricular_activity_body_first'] = 'Throughout my entire high school education, I participated annually in '.$lang['NOIT_link_full'].' with various developments and projects. My project in combination with my perfect theoretical preparation brought me a silver medal from my first year in the competition. My next big success was when in December of 2017 I participated in the '.$lang['NET_link_full'].' where my project "ChildStatus" brought me first place in my category. I\'ve also earned other awards and recognitions during those years.';
$lang['extracurricular_activity_body_second'] = 'High school was a very valuable period for my soft skills too. Many of the teachers would frequently come to me for technical advice. The school has an active IT team that participates in competitions and such. Part of the newcomer students\' preparation was my responsibility. Most of the time I was the one introducing them to programming. This taught me to work with inexperienced people and express complex concepts in an understandable fashion.';
$lang['noit'] = "NOIT";
$lang['january'] = "January";
$lang['february'] = "February";
$lang['march'] = "March";
$lang['april'] = "April";
$lang['may'] = "May";
$lang['june'] = "June";
$lang['july'] = "July";
$lang['august'] = "August";
$lang['september'] = "September";
$lang['october'] = "October";
$lang['november'] = "November";
$lang['december'] = "December";
$lang['web_developer'] = "Web Developer";
$lang['freelance'] = "Freelance";
$lang['freelance_experience'] = "Summer of 2016. I felt confident enough to offer my services as a developer on the freelance market. Through this period, I developed one WordPress informative website, one relatively big project based on PHP/Codeigniter and an online store, based on Python/Django. Having in mind my work conditions, that is just about all I can say about those projects.";
$lang['pluni'] = 'Plovdiv University "Paisii Hilendarski"';
$lang['software_engineering'] = "Software Engineering";
$lang['software_engineering_desc'] = 'I am now officially a <a href="https://uni-plovdiv.bg/pages/index/1131/" target="_blank">Software Engineering</a> student at the <a href="https://uni-plovdiv.bg/" target="_blank">Plovdiv University</a>.';
$lang['current_moment'] = "Current moment";
$lang['pgi'] = "High school of Economics - Pernik";
$lang['pgi_h1'] = "Economic Informatics";
$lang['pgi_h2'] = "Extracurricular activity - web and mobile development";
$lang['pgi_desc'] = '<a href="http://pgi-pernik.bg-schools.com" target="_blank">PGI</a> is where my interest towards IT evolved into a full on career direction. During my time there, the school stood out as the leading high school in town for studying IT and my devotion and motivation were a big part of the reason. ';
$lang['soupberon'] = "Petar Beron Elementary Shool - Pernik";
$lang['soupberon_h1'] = "Elementary education";
$lang['soupberon_desc'] = 'The single most important thing I got from my education in <a href="http://www.soupetarberon.info/" target="_blank">here</a> is fluency in English and a basic level of Russian. That\'s also where my experience as a web developer started as it\'s where I met HTML for the first time.';
$lang['ss_presenting_h'] = "Speaking in front of a crowd and presenting";
$lang['ss_presenting_desc'] = "My five years of experience in ".$lang['NOIT_link_full']." have thought me to speak in front of a crowd and present ideas and projects while adapting my presentation style in accordance to the audience.";
$lang['ss_leader_h'] = "Good leader";
$lang['ss_leader_desc'] = "I think I am a good leader because I can spot every team member's strengths and weaknesses and use that information to split the workload with maximum efficiency.";
$lang['ss_communicative_h'] = "Communicative";
$lang['ss_communicative_desc'] = 'I find a common language with a variety of different types of people. Communicating is not a problem for me.';
$lang['ss_pressure_h'] = "Working under pressure";
$lang['ss_pressure_desc'] = "I can work very efficiently and with high coordination in intense environments and under pressure, but work in such conditions exhausts me and I prefer to stay away from it.";
$lang['ss_learn_h'] = "Fast learner";
$lang['ss_learn_desc'] = 'I adopt new concepts and technologies very quickly.';
$lang['ss_teacher_h'] = "Good teacher";
$lang['ss_teacher_desc'] = 'I was very sceptical about my teaching and tutoring skills at first, but feedback from people that I\'ve been mentoring while in PGI made me change my mind. Younger students and some of my peers say that I explain things in an understandable way.';
$lang['awards_2014_desc'] = 'My first major appearance in IT was back in 2014. I participated in '.$lang['NOIT_link_full'].'. My project <a href="http://oureurope.bg-schools.com" target="_blank">Our Europe</a> was placed third under the "website" category. That in combination with my excellent performance in the theoretical exam brought me second place in the general ranking and thus a silver medal.';
$lang['awards_2017_noit'] = 'My most successful year yet was 2017. My success started with my excellent performance at '.$lang['NOIT_link_full'].' with my project <a href="https://play.google.com/store/apps/details?id=eu.noit.remindme" target="_blank">Remind Me!</a> which was my first time meeting android development. The project was placed sixth in its category. That in combination with my excellent performance on the test brought me a 6.00 mark.';
$lang['awards_2017_konkurs'] = 'The success in NOIT earned me an invitation to the <a href="https://www.president.bg/cat37/Nagrada-Jonh-Atanasov/" target="_blank">competition for the "John Atanasov" award</a>, organized by the administration of the Bulgarian presidency.';
$lang['awards_2017_net'] = 'I marked the end of my most successful year with a first place in the '.$lang['NET_link_full'].' with the project "ChildStatus" which is still under active development. The gist of the project is that parents can ask for their children\'s status and they have extra options for specific situations.';

$skill_cats = [
	'frontend' => [
		'title' => "Frontend languages and tools",
		'skills' => $skills_frend
	],
	'backend' => [
		'title' => "Backend languages and tools",
		'skills' => $skills_bend
	],
	'other' => [
		'title' => "Other",
		'skills' => $skills_other
	],
];