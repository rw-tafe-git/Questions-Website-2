<?php

function connect() {
	
	$host = 'localhost';
	$dbname = 'questionsdb';
	$username = 'root'; 
	$password = ''; 
	
	try {
		return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	} catch (PDOException $e) {
		die("Error: " . $e->getMessage());
	}
}