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

  if($_SERVER["REQUEST_METHOD"] == "UPDATE"){
    $postTitle = htmlspecialchars($_UPDATE["updateTitle"]);
    $postDescription = htmlspecialchars($_UPDATE["updateDescription"]);
    $postLanguages = htmlspecialchars($_UPDATE["updateLanguages"]);
    $postLink = htmlspecialchars($_UPDATE["updateLink"]);
    $postFullDescription = htmlspecialchars($_UPDATE["updateFullDescription"]);
  };

  $query = "UPDATE INTO Projects (title, description, languages, link, fullDescription) VALUES ('$postTitle', '$postDescription', '$postLanguages', '$postLink', '$postFullDescription');";

  $conn->query($query);

  header("Location: ./admin.php");
  exit;