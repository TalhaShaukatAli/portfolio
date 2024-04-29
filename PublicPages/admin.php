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

    <!-- <form action="sendmessage.php" method="post">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="sendername" placeholder="Your name...">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="senderemail" placeholder="Your last name...">
        <label for="subject">Message</label>
        <textarea id="subject" name="sendermessage" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
    </form> -->


    <div class= "adminContainer">
    <div style= "text-align:center">
    <h2>Create Post</h2>
    <form action="createPost.php" method= "post">
        <label for="title">Title</label>
        <input type="text" id="title2" name="postTitle2">
        <label for="description">Description</label>
        <input type="text" id="description" name="postDescription">
        <label for="languages">Languages Used</label>
        <input type="text" id="languages" name="postLanguages">
        <label for="link">Link</label>
        <input type="text" id="link" name="postLink">
        <label for="fullDescription">Full Description</label>
        <input type="text" id="fullDescription" name="postFullDescription">
        <input type="submit" value="Create">


    <!-- <div class= "adminContainer"> -->
    <div style= "text-align:center">
    <h2>Update Post</h2>
    <form action="updatePost.php" method= "update">
        <label for="title">Title</label>
        <input type="text" id="title" name="updateTitle">
        <label for="description">Description</label>
        <input type="text" id="description" name="updateDescription">
        <label for="languages">Languages Used</label>
        <input type="text" id="languages" name="updateLanguages">
        <label for="link">Link</label>
        <input type="text" id="link" name="updateLink">
        <label for="fullDescription">Full Description</label>
        <input type="text" id="fullDescription" name="updateFullDescription">
        <input type="submit" value="Update">


    <!-- <div class= "adminContainer"> -->
    <div style= "text-align:center">
    <h2>Delete Post</h2>
    <form action="deletePost.php" method= "delete">
        <label for="title">Title</label>
        <input type="text" id="title" name="postTitle">
        <!-- <label for="description">Description</label>
        <input type="text" id="description" name="postDescription">
        <label for="languages">Languages Used</label>
        <input type="text" id="languages" name="postLanguages">
        <label for="link">Link</label>
        <input type="text" id="link" name="postLink"> -->
        <input type="submit" value="Delete">




<!-- <div class= "adminContainer">
    <div style= "text-align:center">
        <form action="createPost.php">
            <input type="text" title="username" placeholder="username" />
            <input type="text" title="password" placeholder="password" />
            <input type="submit" value="Login"></button>
        </form>
        <form action="deletePost.php">
            <input type="text" title="username" placeholder="username" />
            <input type="text" title="password" placeholder="password" />
            <input type="submit" value="Login"></button>
        </form>
        <form action="updatePost.php">
            <input type="text" title="username" placeholder="username" />
            <input type="text" title="password" placeholder="password" />
            <input type="submit" value="Login"></button>
        </form>
        <form action="deletesubmissions.php">
            <input type="text" title="username" placeholder="username" />
            <input type="text" title="password" placeholder="password" />
            <input type="submit" value="Login"></button>
        </form>
</div> -->