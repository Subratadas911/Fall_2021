<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function SearchByName($conn,$table,$name)
 {
$result = $conn->query("SELECT * FROM $table WHERE Name='$name'");
 return $result;
 }
  function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function SearchByInterest($conn,$table,$interest)
 {
$result = $conn->query("SELECT * FROM $table WHERE Interest='$interest'");
 return $result;
}
 function SearchByDesignation($conn,$table,$udesignation)
 {
$result = $conn->query("SELECT * FROM $table WHERE Designation='$udesignation'");
 return $result;
}


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>