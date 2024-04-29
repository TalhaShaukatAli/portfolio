<?php
$navArray= array("Home","About","Projects","Experience", "Resume", "Contact Me", "Admin", "API");
$config= parse_ini_file('config.ini',true);
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

<main id="indexBody">
    <img id="indexBodyImg" src="/me.jpeg" alt="">
    <div id ="indexBodyName">
    Hello, I'm Talha
    </div>
    <div id="indexBodyTitle">
    Welcome to my portfolio website!
    </div>
    </div>
    <div id="indexBodyDesc">
        Computer Science Major at Bemidji State University
    </div>
</main>

</div>
</body>
</html>