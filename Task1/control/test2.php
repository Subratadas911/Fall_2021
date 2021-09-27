<?php

$validatefname="";
$validatelname="";
$validateemail="";
$validatepass="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3="";
$fname=$email=$designation="";
$lname="";
$age=0;
$pass="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$designation=$_REQUEST["designation"];
$age=$_REQUEST["age"];
if(empty($fname) || (strlen($fname)<5))
{
    $validatefname= "You have to enter First name";

}
else
{
    $validatefname=$fname;
}

if(empty($lname) || (strlen($lname)<5))
{
    $validatelname= "You have to enter Last name";

}
else
{
    $validatelname=$lname;
}



if(empty($pass) || (strlen($pass)<8))
{
    $validatepass="You have to enter valid password";
}
else
{
    $validatepass= "Your password is ".$pass;
}


if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You have to enter email";
}

else
{
    $validateemail= "Your email is ".$email;
}


if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["C++"]))
{
    $validatecheckbox = "please select at least one checkbox button";
    
}
else
{
   if(isset($_REQUEST["JAVA"]))
   {
       $v1= $_REQUEST["JAVA"];
   }
   if(isset($_REQUEST["PHP"]))
   { 
       $v2= $_REQUEST["PHP"];
   }
   if(isset($_REQUEST["C++"]))
   {
    $v3= $_REQUEST["C++"];
   }
}
if(isset($designation))
{
    $validateradio= $designation;
}
else
{
    $validateradio= "Please select at least one radio button";
}

}

?>