<?php
$servername='localhost';
$username='root';
 $password='';
$dbname = "techbook";

//creat a connection
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_connect_error()); 
}
else{
   echo"Connection sucessful";
}
?>