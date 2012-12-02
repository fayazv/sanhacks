<?php
include('init.php');

$id = addslashes($_REQUEST['id']);

$query =  "SELECT * FROM reports";

$report = mysql_query($query);
$image = mysql_fetch_assoc($report);
$image = $image['image'];

header("Content-type: image/jpeg");

echo $image;

?>