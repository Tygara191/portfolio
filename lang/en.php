
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
$lang['intro'] = 'I am a motivated, young IT specialist and software engineer with a clear goal to grow in the IT sector. Currently %d years old, I\'ve devoted the last %d of them to constant IT activities, the latest one being my role as CTO at <a href="https://graosoft.com/" target="_blank">Graosoft</a>. I read, write, understand and speak English fluently. My hobbies include electronics, mechanics, cars, audio gear and DJing, and Minecraft.';
$lang['extracurricular_activity'] = "Extracurricular activity";
$lang['extracurricular_activity_body_first'] = 'Throughout my entire high school education, I participated annually in '.$lang['NOIT_link_full'].' with various developments and projects. My project in combination with my perfect theoretical preparation brought me a silver medal from my first year in the competition. My next big success was when in December of 2017 I participated in the '.$lang['NET_link_full'].' where my project "ChildStatus" brought me first place in my category. I\'ve also earned other awards and recognitions during those years.';
$lang['extracurricular_activity_body_second'] = 'High school was a very valuable period for my soft skills too. Many of the teachers would frequently come to me for technical advice. The school has an active IT team that participates in competitions and such. Part of the newcomer students\' preparation was my responsibility. Most of the time I was the one introducing them to programming. This taught me to work with inexperienced people and express complex concepts in an understandable fashion.';
$lang['zoiper'] = "Zoiper";
$lang['zoiper_position'] = "Android & JavaScript developer";
$lang['zoiper_body'] = 'I started off my professional career as part of <a href="https://zoiper.com/" target="_blank">Zoiper</a>\'s Android team. Me and my colleagues would work to maintain and improve the company\'s <a href="https://play.google.com/store/apps/details?id=com.zoiper.android.app" target="_blank">VOIP softphone for Android</a>.';
$lang['zoiper_body_banafo'] = 'For the latter part of my stay at Zoiper, I became the lead developer behind <a href="https://banafo.com/" target="_blank">Banafo</a>\'s Express JS backend, working and developing a microservice-based architecture. I also have a contribution in some parts of the project\'s React frontend.';
$lang['nuvolo'] = "Nuvolo";
$lang['nuvolo_position'] = "Software Engineer II";
$lang['nuvolo_body'] = 'I currently work at <a href="https://www.nuvolo.com/" target="_blank">Nuvolo</a> as part of the team behind the company\'s Real Estate Asset Management solution. My main day-to-day work includes developing and maintaining backend business logic, hosted by <a href="https://www.servicenow.com/" target="_blank">ServiceNow</a> and also a frontend interface powered by React.';
$lang['graosoft'] = "Graosoft";
$lang['graosoft_position'] = "Chief Technology Officer (CTO)";
$lang['graosoft_body'] = 'My work at <a href="https://graosoft.com/" target="_blank">Graosoft</a> includes but is not limited to planning the architectural direction of projects, supporting members of the technical team, reviewing and providing feedback for their technical implementations, development, solving technical problems, process automation.';
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
$lang['freelance_experience'] = 'Summer of 2016. I felt confident enough to offer my services as a developer on the freelance market. Through this period, I developed one WordPress <a href="https://топлоизолации.bg/" target="_blank">small company website</a>, one relatively big project based on PHP/Codeigniter and an online store, based on Python/Django. Having in mind my work conditions, that is just about all I can say about those projects.';
$lang['pluni'] = 'Plovdiv University "Paisii Hilendarski"';
$lang['software_engineering'] = "Software Engineering";
$lang['software_engineering_desc'] = 'I hold a bachelor\'s degree in <a href="https://uni-plovdiv.bg/pages/index/1131/" target="_blank">Software Engineering</a>, issued by the <a href="https://uni-plovdiv.bg/" target="_blank">Plovdiv University</a>.';
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
		'desc' => "I have the skill to read between the lines and communicate until I get to the essence what somebody is saying. This ability tends to be especially useful in a conference setting where a sumarized conclusion must be formulated.",
	],
	[
		'h' => "Communicative",
		'desc' => "I find a common language with a variety of different types of people. Communicating has rarely, if ever, been a problem for me.",
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
		'desc' => 'I\'ve been teaching and mentoring people in earlier stages in their careers since the very beginning of my own. Younger students and my peers say that I explain things in understandable ways.',
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

$lang['skills_android'] = "The Android-related items in my technology stack include Java, Kotlin, Some parts of Jetpack, Dagger2, RxJava2, MVP, MVVM, Butterknife, Room, Retrofit 2, FCM, design patterns and more. Designing the architecture by which apps are written is something I've got an intense interest in.";
$lang['skills_frontend'] = "I have rich experience with the basic frontend kit - HTML, CSS, JS, jQuery. This allows me to build a fully functional frontend interface, based on given conditions.";
$lang['skills_angular'] = "I have purely conceptual knowledge and while I do know the basic structures and ways of working, there are some practical details that im not that familiar with.";
$lang['skills_reactjs'] = "I've got rich experience in ReactJS and have worked with it extensively.";
$lang['skills_bootstrap'] = "My bootstrap experience consists of modifying ready-made designs and assembling custom ones out of pieces of different templates to get a desired result.";
$lang['skills_backend'] = "A good portion of my IT activity in general is centered around backend developments.";
$lang['skills_php'] = 'PHP is my starter language. I\'ve been involved with PHP since 2013 and <a href="https://oureurope.bg-schools.com/" target="_blank">Our Europe</a> is the first website I made with it in the same year. I\'ve developed a lot of different things using PHP - from full website backends to data scraping scripts, scripts to extract hidden files from a flash drive, database migration scripts, database normalization scripts. PHP is my go-to tool for tackling irregular tasks.';
$lang['skills_codeigniter'] = "I am comfortable with the framework and like using it. I've done 2 noteworthy projects in the past. The backend of the \"Remind me!\" android app, which I competed with at ".$lang['NOIT_link_full']." 2017 and another more complex project for a private client that I cannot discuss further due to an NDA.";
$lang['skills_express'] = "I've deployed Express JS as the main web app framework in a microservice-architectured enviroment.";
$lang['skills_python'] = "I met Python for the first time back in 2014. I've used it for web development with both Django and Flask, UIs with pyqt, data scraping, machine learning and other miscellaneous scripts.";
$lang['skills_javascript'] = "It's been the main language I've worked with for several years so I am very comfortable with JS.";
$lang['skills_django'] = 'I\'ve executed a few projects using Django, more notable examples are <a href="http://analyze.noit.eu/" target="_blank">Analyze me!</a> (2016) and <a href="http://klimatici.топлоизолации.bg/" target="_blank">klimatici.bg</a> (2018).';
$lang['skills_mysql'] = "A sizable chunk of my projects include MySQL in one way or another, I know it well. I can plan out and make a complex schema based on given conditions. I can write complex SQL queries with joins, groups etc.";
$lang['skills_mongodb'] = "I've used MongoDB as a main database for over an year as part of my experience at Zoiper.";
$lang['skills_rest'] = "I get the concept and I can apply it to my APIs' design.";
$lang['skills_other'] = "Other";
$lang['skills_other_d'] = "Other tools and methodologies I have experience with:";
$lang['skills_git'] = "I make use of Git for day-to-day development work - commits, branches, merges, tags, gitflow workflow, etc.";
$lang['skills_photoshop'] = "My photoshop skills don't really go beyond resizing an image, clearing a background and simular basic tasks.";
$lang['skills_wordpress'] = "I've got a few sites built with the CMS. While definitely no expert, I know my way around it.";
$lang['skills_trello'] = "I used it to organize the tasks in my last project.";
$lang['skills_windows'] = "My preferred operating system. While I have used Linux (Kubuntu) for my daily work, I still prefer working on Windows whenever possible.";
$lang['skills_linux'] = "I am comfortable with it and have used it both as a build/testing/deployment environment for various projects, as well as an OS for daily personal usage and work.";
$lang['skills_jira'] = "I am comfortable using Jira to manage my work. I've also set up an instance so I am familiar with it from an admin's standpoint too.";
$lang['skills_crucible'] = "Comfortable with the Crucible Code Review Tool.";
$lang['skills_docker'] = "I am comfortable with Docker and working in an environment where it's heavily used. I am also familiar with tools like Docker Compose and Kubernetes.";
$lang['skills_bitbucket_pipelines'] = "A tool with which I got very familiar while implementing CI/CD flows for different projects at Graosoft.";
$lang['skills_snow'] = "ServiceNow";
$lang['skills_snow_description'] = '<a href="https://www.servicenow.com/" target="_blank">ServiceNow</a> is an enterprise platform with a wide range of capabilities, features and applications. My experience with it includes the following:';
$lang['skills_snow_scoped_app_title'] = 'Scoped Application Development';
$lang['skills_snow_scoped_app_desc'] = 'A large portion of my experience with the platform consists of developing custom scoped applications for it, mostly related to real estate.';
$lang['skills_snow_scripting_title'] = 'Development tools';
$lang['skills_snow_scripting_desc'] = 'I\'ve done a fair amount of coding in a ServiceNow environment and as a result am familiar with a large portion of the core tools and APIs such as buesiness rules, script includes, events, ACLs, Glide Server APIs, GlideSystem and others.';