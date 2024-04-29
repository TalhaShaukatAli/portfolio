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

<?php
class Project {
    // Properties
    private $title;
    private $description;

    // Constructor
    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }

    // Method to display project details
    public function displayProject() {
        $output = "<main id='aboutBody'>";
        $output .= "<div id='aboutBodyTitle'>$this->title</div>";
        $output .= "<div>$this->description</div>";
        $output .= "</main>";
        return $output;
    }
}

// Create instances of Project class for each project
$arbo = new Project(
    "Arbo",
    "Together with a team, I contributed to develop a mobile application called Arbo. It is an app that helps the user locate the various types of trees around them. With the help of a Google Maps API, we were able to achieve two tasks. The user can see their location on the map and also are introduced to a variety of different colored pins around them. Each of these colors signify a unique species of trees. Say, if a user wanted to search for Oak trees in the area, they can choose to filter out the rest of the trees and just have the Oak trees shown on the map. Furthermore, we did not limit our users to simply receive this information. For instance, if they were on a hike and located a tree that was not yet marked on Arbo's radar, they have an opportunity to contribute to expanding our database. They can do so by simply placing a pin on that location on the map, naming the type of tree they have discovered, and then submit. Their new findings will then be a part of the map, free to view for whoever interacts with our app in the future."
);

$cybersecurityStudy = new Project(
    "Study on types of Hacking - Cybersecurity",
    "I conducted a study on the various types of hacking in Cybersecurity and wrote a thesis on it. During the study, I discovered a range of tactics, from brute-force attacks, SQL injections, to phishing attacks where attackers employ deceptive tactics to trick users into divulging confidential information such as their login credentials or financial details. The study underscored the importance of implementing robust Cybersecurity measures which included strong authentication mechanisms, secure coding practices, and continuous monitoring to mitigate the risks posed by these or any other hacking techniques."
);

// Display project details
echo $arbo->displayProject();
echo $cybersecurityStudy->displayProject();

?>

</div>
</body>
</html>