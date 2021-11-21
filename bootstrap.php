<?php 
session_start();
require "config.php"; 
$config=require "config.php";
$configuration = $config['database'];
// var_dump($configuration);
require "Class/Connection.php";
require "Class/User.php";
require "Class/Posts.php";

$db = Connection::con($configuration);
$register = new User($db);
$post = new Posts($db);



?>