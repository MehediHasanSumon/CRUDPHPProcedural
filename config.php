<?php 
$dbhost = 'localhost';
$dbname = 'procedural_project';
$dbuser = 'root';
$dbpass = '';

try {
 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>