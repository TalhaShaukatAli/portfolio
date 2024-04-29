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
        Banking Application
    </div>
    <div>
    <br>One of my personal favorites is a banking app that I made with some of my peers in my Advanced Web Programming class. The task was to create a website which included a login page, an account summary page, and a transaction transfer page. The login page would ask a user to put in their username and password. After that, the account summary page is displayed which shows three checking accounts and a total sum of funds underneath them. The transaction transfer page allows the user to transfer a certain amount from one account to another under the condition that the account used for transferring the funds has sufficient balance.<br>
    </div>
    <div>
        <br>Languages Used: PHP, CSS
    </div>
    </div>
</main>