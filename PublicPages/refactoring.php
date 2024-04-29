<?php
$navArray= array("Home","About","Projects","Experience", "Resume", "Contact Me", "Admin", "API");
$config= parse_ini_file('../config.ini',true);
$environment= $config['ENVIRONMENT'];
define("URL_ROOT", $config[$environment]["URL_BASE"]);
define("ABS_ROOT", $config[$environment]["ABS_ROOT"]);
?>

<?php include_once(ABS_ROOT. "/src/views/head.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/nav.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/about.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/projectslist.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/experience.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/resume.view.php"); ?>

<main id="aboutBody">
    <div id ="aboutBodyTitle">
        Class Assignment - Refactoring
    </div>
    <div>
    <br>In my Advanced Web Programming class, one of my first projects involved a workshop where we made a basic portfolio website. At first, we were asked to use PHP and CSS to construct three pages. But over time, the task switched to reconstructing what we had into objects. The website initially consisted of three pages. A home page, an assignments page, and an about me page. The home page did not have much information on it. The assignments page had a list of all the assignments we have done or will do later on during the course of the semester. Finally, the about me page consisted of my personal information which included my profile photo and a description of why I chose Computer Science as my major. As someone who had minimal experience in PHP and CSS at the time, it was still faily simple to get it done. The task assigned to us a couple weeks later involved refactoring that porfolio website in an object oriented manner. This is also when URL_ROOT and ABS_PATH was introduced to us. Using all of the tools at our disposal, we implemented objects into our portfolio website code.<br>
    </div>
    <div>
        <br>Languages Used: PHP, CSS
    </div>
    </div>
</main>
