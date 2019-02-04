<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session 
session_destroy();
 
// Redirect to login page
header('location: login php');
exit;
?>

$sql = 'INSERT INTO data (id, TeamName,Description,Date,Name1,Name2,Name3,Name4,Number1,Number2,Number3,Number4,Roll1,Roll2,Roll3,Roll4,Piad,Room,Allocated,Type,extra,extra,extra)
VALUES (' $id ',' $TName ',' $desc ',' $date ',' $name1 ',' $name2',' $name3 ',' $name4 ',' $no1 ',' $no2 ',' $no3 ',' $no4 ',' $roll1 ',' $roll2 ',' $roll3 ',' $roll4 ',' $paid ',' $room ',' $alloca ',' $type ',' $extra ',' $extra ',' $extra ')';
