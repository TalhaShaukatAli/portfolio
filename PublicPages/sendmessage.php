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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $senderName = htmlspecialchars($_POST["sendername"]);
      $senderEmail = htmlspecialchars($_POST["senderemail"]);
      $senderMessage = htmlspecialchars($_POST["sendermessage"]);
  };
  
  $query = "INSERT INTO submissions (name, email, message)VALUES ('$senderName', '$senderEmail', '$senderMessage');";
  
  $conn->query($query);
  
  header("Location: ./contact.php");
  exit;

