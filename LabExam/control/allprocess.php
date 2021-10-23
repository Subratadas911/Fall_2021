<?php
session_start();
include('view/db.php');

$validateuname="";
$validatefname="";
$validatemobile="";
$validatepass="";
$validatedob="";
$validateuni="";
$validatedegree="";
$validatemajor="";
$validateresult="";
$validatepsy="";
$uname=$mobile="";
$fname="";
$dob=0;
$psy=0;
$password="";
$uni="";
$degree="";
$major="";
$result="";
$error="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$uname=$_REQUEST["uname"];
$password=$_REQUEST["password"];
$fname=$_REQUEST["fname"];
$mobile=$_REQUEST["mobile"];
$dob=$_REQUEST["dob"];
$uni=$_REQUEST["uni"];
$degree=$_REQUEST["degree"];
$major=$_REQUEST["major"];
$result=$_REQUEST["result"];
$psy=$_REQUEST["psy"];



if(empty($uname))
{
    $validateuname= "You have to enter UserName";

}
else
{
    $validateuname=$uname;
}

if(empty($fname))
{
    $validatefname= "You have to enter Fullname";

}
else
{
    $validatefname=$fname;
}



if(empty($password) || (strlen($password)<8))
{
    $validatepass="You have to enter valid password";
}
else
{
    $validatepass= "Your password is ".$password;
}


if(empty($mobile))
{
    $validatemobile="You have to enter mobile no.";
}

else
{
    $validatemobile= "Your mobile is ".$mobile;
}
if(empty($uni))
{
    $validateuni= "You have to enter University Name";

}
else
{
    $validateuni=$uni;
}
if(empty($degree))
{
    $validateuname= "You have to enter Degree Name";

}
else
{
    $validatedegree=$degree;
}
if(empty($major))
{
    $validatemajor= "You have to enter a Major Name";

}
else
{
    $validatemajor=$major;
}
if(empty($result))
{
    $validateresult= "You have to enter a Major Name";

}
else
{
    $validateresult=$result;
}


}
if (isset($_POST['Next'])) {
    $_SESSION["uname"] = $_POST['uname'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["fname"] = $_POST['fname'];
    $_SESSION["mobile"] = $_POST['mobile'];
    $_SESSION["dob"] = $_POST['dob'];

    
}
else{
    $error = "Username or Password is invalid";
}




?>