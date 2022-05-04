<?php
include 'connection_test.php';
 $latitude =$_POST['latitude'];
 $longitude =$_POST['longitude'];


$sql = "INSERT into `user_location`(`Latitude`,`Longitude`) VALUES ('$latitude',$longitude) ";
$db =mysqli_query($con,$sql);
if($db){
}
else{
}

?>