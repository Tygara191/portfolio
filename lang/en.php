
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
$lang['intro'] = "I am a motivated, young IT specialist and software engineer with a clear goal to grow in the IT sector. Currently %d years old, I've divoted the last %d of them to constant IT activities. I read, write, understand and speak English fluently. My hobbies include electronics, mechanics, cars, audio gear and DJing, and Minecraft.";
$lang['extracurricular_activity'] = "Extracurricular activity";
$lang['extracurricular_activity_body_first'] = 'Throughout my entire high school education, I participated annually in '.$lang['NOIT_link_full'].' with various developments and projects. My project in combination with my perfect theoretical preparation brought me a silver medal from my first year in the competition. My next big success was when in December of 2017 I participated in the '.$lang['NET_link_full'].' where my project "ChildStatus" brought me first place in my category. I\'ve also earned other awards and recognitions during those years.';
$lang['extracurricular_activity_body_second'] = 'High school was a very valuable period for my soft skills too. Many of the teachers would frequently come to me for technical advice. The school has an active IT team that participates in competitions and such. Part of the newcomer students\' preparation was my responsibility. Most of the time I was the one introducing them to programming. This taught me to work with inexperienced people and express complex concepts in an understandable fashion.';
$lang['zoiper'] = "Zoiper";
$lang['zoiper_position'] = "Android & JavaScript developer";
$lang['zoiper_body'] = 'I am currently part of <a href="https://zoiper.com/" target="_blank">Zoiper</a>\'s Android team. Me and my colleagues work to maintain and improve the company\'s <a href="https://play.google.com/store/apps/details?id=com.zoiper.android.app" target="_blank">VOIP softphone for Android</a>. I also play an active role in the JavaScript part of the company\'s latest project.';
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
$lang['software_engineering_desc'] = 'I am a <a href="https://uni-plovdiv.bg/pages/index/1131/" target="_blank">Software Engineering</a>(part time) student at the <a href="https://uni-plovdiv.bg/" target="_blank">Plovdiv University</a>.';
$lang['current_moment'] = "Current moment";
$lang['pgi'] = "High school of Economics - Pernik";
$lang['pgi_h1'] = "Economic Informatics";
$lang['pgi_h2'] = "Extracurricular activity - web and mobile development";
$lang['pgi_desc'] = '<a href="http://pgi-pernik.bg-schools.com" target="_blank">PGI</a> is where my interest towards IT evolved into a full on career direction. During my time there, the school stood out as the leading high school in town for studying IT and my devotion and motivation were a big part of the reason. ';
$lang['soupberon'] = "Petar Beron Elementary Shool - Pernik";
$lang['soupberon_h1'] = "Elementary education";
$lang['soupberon_desc'] = 'The single most important thing I got from my education at the <a href="https://www.suberon-pernik.com/" target="_blank">Petar Beron Elementary Shool</a> is fluency in English and a basic level of Russian. That\'s also where my experience as a web developer started because it\'s where I met HTML for the first time.';
$lang['awards_2014_desc'] = 'My first major appearance in IT was back in 2014. I participated in '.$lang['NOIT_link_full'].'. My project <a href="http://oureurope.bg-schools.com" target="_blank">Our Europe</a> was placed third under the "website" category. That in combination with my excellent performance in the theoretical exam brought me second place in the general ranking and thus a silver medal.';
$lang['awards_2017_noit'] = 'My most successful year yet was 2017. My success started with my excellent performance at '.$lang['NOIT_link_full'].' with my project <a href="https://play.google.com/store/apps/details?id=eu.noit.remindme" target="_blank">Remind Me!</a> which was my first time meeting android development. The project was placed sixth in its category. That in combination with my excellent performance on the test brought me a 6.00 mark.';
$lang['awards_2017_konkurs'] = 'The success in NOIT earned me an invitation to the <a href="https://www.president.bg/cat37/Nagrada-Jonh-Atanasov/" target="_blank">competition for the "John Atanasov" award</a>, organized by the administration of the Bulgarian presidency.';
$lang['awards_2017_net'] = 'I marked the end of my most successful year with a first place in the '.$lang['NET_link_full'].' with the project "ChildStatus" which is still under active development. The gist of the project is that parents can ask for their children\'s status and they have extra options for specific situations. In case of interest in the project, you can take a look at the <a href="media/childstatus.pptx">presentation</a>';


$lang['soft_skills'] = [
	[
		'h' => "Speaking in front of a crowd and presenting",
		'desc' => "My five years of experience in ".$lang['NOIT_link_full']." have thought me to speak in front of a crowd and present ideas and projects while adapting my presentation style in accordance to the audience.",
	],
	[
		'h' => "Ability to summarize the point of complex statements",
		'desc' => "I have the skill to read between the lines and communicate with someone until I get to the true point of what they're trying to say. This ability tends to be most useful when multiple people are arguing and someone needs to sumarize everyone's arguments and come up with an opinion that takes all of them into consideration.",
	],
	[
		'h' => "Communicative",
		'desc' => "I find a common language with a variety of different types of people. Communicating is not a problem for me.",
	],
	[
		'h' => "Working under pressure",
		'desc' => "I can work very efficiently and with high coordination in intense environments and under pressure, but work in such conditions exhausts me and I prefer to stay away from it.",
	],
	[
		'h' => "Fast learner",
		'desc' => 'I adopt new concepts and technologies very quickly.',
	],
	[
		'h' => "Good teacher",
		'desc' => 'I was very sceptical about my teaching and tutoring skills at first, but feedback from people that I\'ve been mentoring while in PGI made me change my mind. Younger students and some of my peers say that I explain things in an understandable way.',
	],
	[
		'h' => "Teamwork",
		'desc' => "I don't find any difficulty working with all kinds of people.",
	],
	[
		'h' => "Not afraid to ask",
		'desc' => "Many times, people are worried to ask \"stupid\" questions, which, while understandable, leads to big issues and lots of time wasted. I ask all the questions necessary, when necessary. Not to say I don't try to figure some things out by myself, but I make a concious effort to ask when I know someone else has/can solve a given problem faster/better than me.",
	]
];

$lang['skills_android'] = "The Android-related items in my technology stack include Java, Kotlin, Some parts of Jetpack, Dagger2, RxJava2, MVP, MVVM, Butterknife, Room, Retrofit 2, FCM, design patterns and more. Architecturing the way apps are written is currently at the top of my interests list and I am actively studying and experimenting.";
$lang['skills_frontend'] = "I have rich experience with the basic frontend kit - HTML, CSS, JS, jQuery. This allows me to build a fully functional frontend interface, based on given conditions.";
$lang['skills_angular'] = "I have purely conceptual knowledge and while I do know the basic structures and ways of working, there are some practical details that im not that familiar with.";
$lang['skills_reactjs'] = "I've looked into and experimented with React and React Native in combination with Redux.";
$lang['skills_bootstrap'] = "My bootstrap experience consists of modifying ready-made designs and assembling custom ones out of pieces of different templates to get a desired result.";
$lang['skills_backend'] = "A good portion of my IT activity in general is centered around backend developments.";
$lang['skills_php'] = "PHP is my starter language and therefore I have the most experience in it - %d years. I've developed a lot of different things using PHP - data scraping scripts, websites, scripts to extract hidden files from a flash drive, database migration scripts, database normalization scripts. PHP is my go-to tool for tackling irregular tasks.";
$lang['skills_codeigniter'] = "I've got 2 developed projects with it. The backend of the \"Подсети ме!\" android app and another more complex project which included a frontend. I can execute even a more complex project using CI.";
$lang['skills_twig'] = "Twig's resemblance to Django's templating engine makes it very easy for me to get into.";
$lang['skills_express'] = "I've deployed Express JS as the main web app framework in a microservice-architectured enviroment.";
$lang['skills_python'] = "I met Python for the first time back in 2014. I've used it for web development with both Django and Flask, UIs with pyqt, data scraping, machine learning and other miscellaneous scripts.";
$lang['skills_javascript'] = "Imperative, object-oriented, functional.";
$lang['skills_django'] = "I've been familiar with Django for just about %d years now. I can use Django to make from simple to more complex projects.";
$lang['skills_mysql'] = "A solid chunk of my projects in the last %d years include MySQL in one way or another. I'd describe my knowledge as mid-level. I can plan out and make a schema based on given conditions. I can write complex SQL queries with joins, groups etc.";
$lang['skills_mongodb'] = "My experience with Mongo doesn't really go further than a few days of tinkering around and testing, but I'd say those few days have given me enough of an idea to be able to get into an enviroment, where Mongo is used, relatively quickly.";
$lang['skills_rest'] = "I get the concept and I can apply it to my APIs' design.";
$lang['skills_other'] = "Other";
$lang['skills_other_d'] = "Other tools and methodologies I am aware of:";

$lang['skills_git'] = "I make use of Git for day-to-day development work - commits, branches, merges, tags, gitflow workflow, etc.";
$lang['skills_photoshop'] = "My photoshop skills don't really go beyond resizing an image, clearing a background and simular basic tasks.";
$lang['skills_wordpress'] = "I've got a few sites built with the CMS. While definitely no expert, I know my way around it.";
$lang['skills_trello'] = "I used it to organize the tasks in my last project.";
$lang['skills_windows'] = "My preferred operating system. While I have used and currently do use Linux (Kubuntu) for my professional work, I still prefer working on Windows when possible.";
$lang['skills_kubuntu'] = "I currently use Kubuntu to do my day-to-day work. I wouldn't describe my general Linux skills as anything impressive, but they're enought to get me through pretty much every daily task.";
$lang['skills_jira'] = "I am comfortable using Jira to manage my work. I've also set up an instance so I am familiar with it from an admin's standpoint too.";
$lang['skills_crucible'] = "Comfortable with the Crucible Code Review Tool.";
$lang['skills_docker'] = "My interest in Docker recently spiked. I met it at work and started experimenting.";