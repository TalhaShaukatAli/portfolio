<?php 

$user = "root";
$pass = "";
$host = "localhost";
$name = "tali";

try {
    $conn = new PDO("mysql:host=$host;db_name=$name",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully", PHP_EOL;
} catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}

class dbHelper{
    private $_conn; 

    function __construct($conn){
        $this->_conn = $conn;
        $query = "USE tali;";
        $this->_conn->query($query);
    }
    function addProject($title, $description, $fullDescription, $languages, $link){
        $query = "INSERT INTO projects (`title`, `description`, `fullDescription`, `languages`, `link`) VALUES ('$title','$description', '$fullDescription', '$languages','$link');";
        $this->_conn->query($query);
    }
    function getProject($title){
        $query = "SELECT `title`, `description`, `fullDescription`, `languages`, `link` FROM `projects` WHERE `title` = '$title';";
        $this->_conn->query($query);
    }
};

$db = new dbHelper($conn);
$db->addProject( "k", "In my Advanced Web Programming class, one of my first projects involved a workshop where we made a basic portfolio website. At first, we were asked to use PHP and CSS to construct three pages. But over time, the task switched to reconstructing what we had into objects.","https://github.com/TalhaShaukatAli/helloworld.git", "PHP, CSS", "https://github.com/TalhaShaukatAli/helloworld.git");

$title = "k";
echo $db->getProject($title);



// $stmt = $conn->query("SHOW TABLES LIKE 'login'");
// if ($stmt->rowCount() !== 0) {
// // table exists
// } else {

//     $login = "
//                 CREATE TABLE login(
//                         _id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//                         _created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
//                         _modified_date DATETIME NULL,
//                         _deleted_date DATETIME NULL,
//                         username varchar(255),
//                         password varchar(255)
//                 );
//         INSERT INTO login(username, password)
//         Values(
//                 'Talha',
//                 '1234'
//         );
//         ";
//     $stmt = $conn->exec($login);

// };

// $stmt = $conn->query("SHOW TABLES LIKE 'Projects'");
// if ($stmt->rowCount() !== 0) {

// } else {
    
// $projects = "
// CREATE TABLE Projects(
//         _id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         _created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
//         _modified_date DATETIME NULL,
//         _deleted_date DATETIME NULL,
//         title varchar(255),
//         description varchar(255),
//         languages varchar(255),
//         link varchar(255)
// );
// ";
// $stmt = $conn->exec($projects);

// };

