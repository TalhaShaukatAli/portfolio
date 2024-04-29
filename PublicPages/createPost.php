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

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $postTitle2 = htmlspecialchars($_POST["postTitle2"]);
    $postDescription = htmlspecialchars($_POST["postDescription"]);
    $postLanguages = htmlspecialchars($_POST["postLanguages"]);
    $postLink = htmlspecialchars($_POST["postLink"]);
    $postFullDescription = htmlspecialchars($_POST["postFullDescription"]);
  };

  $query = "INSERT INTO Projects (title, description, languages, link, fullDescription) VALUES ('$postTitle2', '$postDescription', '$postLanguages', '$postLink', '$postFullDescription');";

  $conn->query($query);


  header("Location: ./admin.php");
  exit;