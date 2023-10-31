<?php

function connect() {
	
	 // Database configuration  
    $dbHost     = "localhost";
    $dbName     = "questionsdb";
    // xampp's Username & Password
    $dbUsername = "root";
    $dbPassword = "";

    // Webmin's Username & Password (if() checks current file path).
    if (strpos(dirname(__FILE__), "var/www/")) {
      $dbUsername = "adminer";
      $dbPassword = "P@ssw0rd";
    }

    try {
      $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $ex) {
      $GLOBALS["validConn"] = false;
      $conn = null;
      displayAlert("A connection error has occured: <br> The required database couldn't be found on the server.
        <br> System Message: " . $ex->getMessage(), "warning");
    } finally {
      return $conn;
    }
}