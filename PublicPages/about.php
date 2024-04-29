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

class Section {
    // Properties
    private $title;
    private $content;

    // Constructor
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    // Method to display section
    public function displaySection() {
        $output = "<main id='aboutBody'>";
        $output .= "<div id='aboutBodyTitle'>$this->title</div>";
        $output .= "<div>$this->content</div>";
        $output .= "</main>";
        return $output;
    }
}

// Create instances of Section class for each section
$aboutMe = new Section(
    "About Me",
    "My name is Talha Shaukat Ali. I am an international undergraduate student studying at Bemidji State University, majoring in Computer Science. I was born and raised in Saudi Arabia but I am originally from Pakistan. Growing up, I have always taken interest in technology and have been in awe of its rapid development over the past two decades. Majoring in Computer Science allows me to expand and satisfy that curiosity and witness the innovation through learning the intricacies of our field."
);

$education = new Section(
    "Education",
    "I graduated high school in Saudi Arabia. After that, I decided to begin my Computer Science degree in Malaysia through an American Degree Transfer Program that was offered at my former university. Once a certain threshold of credits were met, I was eligible to transfer all of my credits to any university across the United States. Bemidji State University was among many that had direct links with my former Malaysian university. So, I initiated the credit transfer and continued my degree in the States. I have been a student here for two years and made the Dean's list twice in my first year. I am graduating with Cum Laude honors and this Fall will be my final semester."
);

$skills = new Section(
    "Skills",
    "Fluent in Python, C#, C++ and Java<br>" .
    "Fluent in 4 languages which include English, Urdu, Punjabi, and Arabic<br>" .
    "Great communication skills from working with various groups of people throughout my education<br>" .
    "Motivated, detail-oriented, and efficient<br>" .
    "Aim to tackle tasks in a calculated and measured tone"
);

$awards = new Section(
    "Awards",
    "David Miller Scholarship - Bemidji State University<br>" .
    "First place - The Involvement of AI | Debate Club (Malaysia)<br>" .
    "Second place - Robotics & Coding Event<br>" .
    "Python certificate - Google & Mimo<br>" .
    "C++ Certificate - Google"
);

// Display sections
echo $aboutMe->displaySection();
echo $education->displaySection();
echo $skills->displaySection();
echo $awards->displaySection();

?>

</div>
</body>
</html>
