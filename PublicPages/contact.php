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

<div class="container">
  <div style="text-align:center">
    <h2>Submit Your Inquiries Below</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="../contact.png" style="width:60%">
    </div>
    <div class="column">
      <form action="sendmessage.php" method="post">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="sendername" placeholder="Your name...">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="senderemail" placeholder="Your last name...">
        <label for="subject">Message</label>
        <textarea id="subject" name="sendermessage" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
