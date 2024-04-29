<?php

  $DB_NAME = "tali";
  $DB_HOST = "localhost";
  $DB_USER = "tali";
  $DB_PASS = "tr7251ub";

  try {
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully", PHP_EOL;
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    $postTitle = htmlspecialchars($_DELETE["deleteTitle"]);
    $postDescription = htmlspecialchars($_DELETE["deleteDescription"]);
    $postLanguages = htmlspecialchars($_DELETE["deleteLanguages"]);
    $postLink = htmlspecialchars($_DELETE["deleteLink"]);
    $postFullDescription = htmlspecialchars($_DELETE["deleteFullDescription"]);
  };

//   if ($conn->query($query) == TRUE) {
//     echo "Post deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// } 
//   $query = "DELETE FROM Projects WHERE title='Project X';"

// //   $query = "DELETE FROM Projects (title, description, languages, link, fullDescription) VALUES ('$postTitle', '$postDescription', '$postLanguages', '$postLink', '$postFullDescription');";

// // $conn->query($query);

//   header("Location: ./admin.php");
//   exit;