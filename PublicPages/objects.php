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
        Class Assignment - Functions to Objects
    </div>
    <div>
    <br>In another in-class assignment, we experimented with the use of a database. Initially, we started working with functions but were given an assignment to refactor everything from functions to objects. A DbService class and object was used to contain all methods that were related to databases. Similarly, an ApplicantService class was used to contain all methods related to applicants. A new Applicant class was constructed to handle methods specific to an individual applicant. This included class properties such as name, level, experience, and skills and methods for retrieving these properties. Lastly, the index.php file needed refactoring to call appropriate methods.<br>
    </div>
    <div>
        <br>Languages Used: PHP, CSS
    </div>
    </div>
</main>