
<?php
$server = 'us-cdbr-iron-east-03.cleardb.net';
$username = 'b8841f10c91da9';
$password = '3d5a9b16';
$database = 'heroku_d6409e729c58c2a';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>

