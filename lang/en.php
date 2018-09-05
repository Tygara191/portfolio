
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
$lang['intro'] = "I am a motivated young IT specialist and software engineer with a clear goal to grow in the IT sector. Currently %d years old, I've divoted the last %d of them to constant IT activities. I read, write, understand and speak English fluently. My hobbies include electronics, mechanics, cars, audio gear and DJing.";
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
$lang['software_engineering_desc'] = 'I am now officially a <a href="https://uni-plovdiv.bg/pages/index/1131/" target="_blank">Software Engineering</a>(part time) student at the <a href="https://uni-plovdiv.bg/" target="_blank">Plovdiv University</a>.';
$lang['current_moment'] = "Current moment";
$lang['pgi'] = "High school of Economics - Pernik";
$lang['pgi_h1'] = "Economic Informatics";
$lang['pgi_h2'] = "Extracurricular activity - web and mobile development";
$lang['pgi_desc'] = '<a href="http://pgi-pernik.bg-schools.com" target="_blank">PGI</a> is where my interest towards IT evolved into a full on career direction. During my time there, the school stood out as the leading high school in town for studying IT and my devotion and motivation were a big part of the reason. ';
$lang['soupberon'] = "Petar Beron Elementary Shool - Pernik";
$lang['soupberon_h1'] = "Elementary education";
$lang['soupberon_desc'] = 'The single most important thing I got from my education in <a href="http://www.soupetarberon.info/" target="_blank">here</a> is fluency in English and a basic level of Russian. That\'s also where my experience as a web developer started as it\'s where I met HTML for the first time.';
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
		'h' => "Good leader",
		'desc' => "I think I am a good leader because I can spot every team member's strengths and weaknesses and use that information to split the workload with maximum efficiency.",
	],
	[
		'h' => "Communicative",
		'desc' => 'I find a common language with a variety of different types of people. Communicating is not a problem for me.',
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
		'desc' => 'While in high school, I worked on projects with the other members of the IT team all the time. Both more experienced and more inexperienced than me.',
	],
];

$lang['skills_android'] = "For my android development, I've always used Java and Android Studio, therefore I am comfortable with them. I am also comfortable with things like Dagger2, RxJava2, MVP, Butterknife, Room, Retrofit 2, FCM and others.";
$lang['skills_frontend'] = "I have rich experience with the basic frontend kit - HTML, CSS, JS, jQuery. This allows me to build a fully functional frontend interface, based on given conditions.";
$lang['skills_angular'] = "I have purely conceptual knowledge and while I do know the basic structures and ways of working, there are some practical details that im not that familiar with.";
$lang['skills_reactjs'] = "I've looked into and experimented with React. I don't really have executed projects, only educational and experimental things.";
$lang['skills_bootstrap'] = "My bootstrap experience consists of modifying ready-made designs and assembling custom ones out of pieces of different templates to get a desired result.";
$lang['skills_backend'] = "The bulk of my experience is in backend development: ";
$lang['skills_php'] = "PHP is my starter language and therefore I have the most experience in it - %d years. I've developed a lot of different things using PHP - data scraping scripts, websites, scripts to extract hidden files from a flash drive, database migration scripts, database normalization scripts. PHP is my go-to tool for tackling irregular tasks.";
$lang['skills_codeigniter'] = "I've got 2 developed projects with it. The backend of the \"Подсети ме!\" android app and another more complex project which included a frontend. I can execute even a more complex project using CI.";
$lang['skills_slim'] = "WWhile looking for a framework to use in my new projects' APIs, I stumbled upon Slim. My experience doesn't go further than the basic concepts and a day of experimenting.";
$lang['skills_twig'] = "Twig's resemblance to Django's templating engine makes it very easy for me to get into.";
$lang['skills_python'] = "I met Python for the first time back in 2014. I've used it for web development with both Django and Flask, UIs with pyqt, data scraping, machine learning and other miscellaneous scripts.";
$lang['skills_django'] = "I've been tinkering around with Django for just about %d years now and it has probably become my go-to framework for most projects I face. I can use Django to make from simple to more complex projects.";
$lang['skills_mysql'] = "A solid chunk of my projects in the last %d years include MySQL in one way or another. I'd describe my knowledge as mid-level. I can plan out and make a schema based on given conditions. I can write complex SQL queries with joins, groups etc.";
$lang['skills_mongodb'] = "My experience with Mongo doesn't really go further than a few days of tinkering around and testing, but I'd say those few days have given me enough of an idea to be able to get into an enviroment, where Mongo is used, relatively quickly.";
$lang['skills_rest'] = "I get the concept and I can apply it to my APIs' design.";
$lang['skills_other'] = "Other";
$lang['skills_other_d'] = "Other tools and methodologies I am aware of:";
$lang['skills_git'] = "My Git experience is nearly an year now. I have no problems with words like repository, branch, stage, commit.";
$lang['skills_bitbucket'] = "I hold a few of my projects at Bitbucket. I can also work with GitHub.";
$lang['skills_photoshop'] = "My photoshop skills don't really go beyond resizing an image, clearing a background and simular basic tasks.";
$lang['skills_wordpress'] = "My experience consists of 1 site. I can make basic sites with WordPress.";
$lang['skills_trello'] = "I used it to organize the tasks in my last project.";
$lang['skills_ubuntu'] = "I used Ubuntu for about an year so I can find my way around it. I gave up on it because of the lack of a viable MS Remote Desktop alternative.";