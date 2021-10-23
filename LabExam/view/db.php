<?php
class db
{
    function OpenCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "CV";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
    }
    function insertuser($conn,$table,$uname,$password,$fname,$mobile,$dob,$uni,$degree,$major,$result,$psy)
    {
        $res = $conn->query("INSERT INTO $table(UserName,Pass,FullName,MobileNo,Dob,University,Degree,Major,Passing year) VALUES('$uname','$password','$fname',$mobile,'$dob','$uni','$degree','$major',$result,$psy)  ");
        return $res;
    }
    
}
?>