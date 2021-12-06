<?php

include('../model/db.php');

$user = $_POST['uname'];
$user1 = $_POST['uinterest'];
$user3 = $_POST['udesignation'];


if($user!="" || $user1!="" || $user3!="")
{

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->SearchByName($conobj,"faculty",$user );

$myQuery=$connection->SearchByInterest($conobj,"faculty",$user1 );

$hisQuery=$connection->SearchByDesignation($conobj,"faculty",$user3 );





if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
   
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "You Did Not Search Anything By Faculty Name  And  ";
  }
  if ($myQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
   
    while($row = $myQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "You Did Not Search Anything By Faculty Interest    And ";
  }
  if ($hisQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
    
    while($row = $hisQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "You Did Not Search Anything By Faculty Designation";
  }
}
else{
  echo "please Enter Something";
  
}