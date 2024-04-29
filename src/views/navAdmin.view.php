<!--Navigation---->
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<nav id="navBar">   
        <ul id="navSel">
            <li> <a href="<?php echo URL_ROOT ?>"> Home</a></li>
            <li> <a href="<?php echo URL_ROOT . "/PublicPages/about.php"?>">About</a></li>
            <li> <a href="<?php echo URL_ROOT . "/PublicPages/projectslist.php"?>">Projects</a></li>
            <li> <a href="<?php echo URL_ROOT . "/PublicPages/experience.php"?>">Experience</a></li>
            <li> <a href="<?php echo URL_ROOT . "/PublicPages/resume.php"?>">Resume</a></li>
            <li> <a href="<?php echo URL_ROOT . "/PublicPages/contact.php"?>">Contact Me</a></li>
            <li style="flex-grow:1;"></li>
            <li id="loginBox"> <a href="<?php echo URL_ROOT . "/PublicPages/admin.php"?>">Log In</a></li>


        </ul>
    </nav>