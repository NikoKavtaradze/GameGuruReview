<?php
$host = "localhost";
$DBname = 'game_guru_reviews_db';
$DBusername = 'Kavtara';
$DBpassword = '';

$conn = mysqli_connect($host, $DBusername, $DBpassword, $DBname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}