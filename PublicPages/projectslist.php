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
    private $details = [];

    // Constructor
    public function __construct($title, $description, $languagesUsed, $githubLink, $fullDescription) {
        $this->details['title'] = $title;
        $this->details['description'] = $description;
        $this->details['languagesUsed'] = $languagesUsed;
        $this->details['githubLink'] = $githubLink;
        $this->details['fullDescription'] = $fullDescription;
    }

    // Method to display project details
    public function displayDetails() {
        $output = "<div id='aboutBodyTitle'>{$this->details['title']}</div>";
        $output .= "<div>{$this->details['description']}</div>";
        $output .= "<div>Languages Used: {$this->details['languagesUsed']}</div>";
        $output .= "<div>Link to the Github Repository Code: <a href='{$this->details['githubLink']}'>{$this->details['githubLink']}</a></div>";
        $output .= "<div>Full Project Description: <a href= '{$this->details['fullDescription']}'>{$this->details['fullDescription']}</a></div>";
        return $output;
    }
}

// Array of project details
$projectsData = [
    [
        "title" => "Class Assignment - Refactoring",
        "description" => "In my Advanced Web Programming class, one of my first projects involved a workshop where we made a basic portfolio website. At first, we were asked to use PHP and CSS to construct three pages. But over time, the task switched to reconstructing what we had into objects.",
        "languagesUsed" => "PHP, CSS",
        "githubLink" => "https://github.com/TalhaShaukatAli/helloworld.git",
        "fullDescription" => "refactoring.php"
    ],
    [
        "title" => "Banking Application",
        "description" => "With the help of my group members, we developed a simple banking app for my Advanced Web Programming class. The task was to create a website which included a login page, an account summary page, and a transaction transfer page.",
        "languagesUsed" => "PHP, CSS",
        "githubLink" => "https://github.com/SaMoBTW/Banking-App",
        "fullDescription" => "banking.php"
    ],
    [
        "title" => "Class Assignment - Functions to Objects",
        "description" => "Another assignment for my Advanced Web Programming class involved the use of a database. At first, we had started working with functions, but just like the portfolio website at the start of the class, we were tasked to implement an object oriented method to one of our previous assignments.",
        "languagesUsed" => "PHP, CSS",
        "githubLink" => "https://github.com/TalhaShaukatAli/Assignment5",
        "fullDescription" => "objects.php"
    ]

];

// Create instances of Project class from array data
$projects = [];
foreach ($projectsData as $data) {
    $projects[] = new Project($data['title'], $data['description'], $data['languagesUsed'], $data['githubLink'], $data['fullDescription']);
}

// Display project details
foreach ($projects as $project) {
    echo "<main id='aboutBody'>";
    echo $project->displayDetails();
    echo "</main>";
}

?>

</div>
</body>
</html>