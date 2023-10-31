<?php

function connect() {
	
	$host = 'localhost';
	$dbname = 'questionsdb';
	$username = 'root'; 
	$password = ''; 
	
	if (strpos(dirname(__FILE__), "var/www/")) {
      $dbUsername = "adminer";
      $dbPassword = "P@ssw0rd";
    }
	
	try {
		return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	} catch (PDOException $e) {
		die("Error: " . $e->getMessage());
	}
}