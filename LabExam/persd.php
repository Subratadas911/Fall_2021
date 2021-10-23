<?php include "control/allprocess.php"; 

if(isset($_SESSION['username'])){
header("location: education.php");
}
?>

<!DOCTYPE html>

<html>
<body>
<h1>Personal Detail</h1>
<hr>
<form action="" method="post">

User Name:<br>
 <input type="text" name="uname"> <?php echo $validateuname; ?>
<br><br>
Password: <br>
<input type="text" name="password"> <?php echo $validatepass; ?>
<br><br>
Full Name:<br>
 <input type="text" name="fname"> <?php echo $validatefname; ?>
<br><br>
Mobile no:<br>
 <input type="text" name="mobile"> <?php echo $validatemobile; ?>
<br><br>
Date of Birth:<br>
<input type="date" name="dob"> <?php echo $dob; ?>

<br>
<br>



<a href="education.php"> Next</a>;

</form>

</body>
</html>