<?php include "control/results.php"; ?>

<!DOCTYPE html>

<html>
<body>
<h1>Registration Form </h1>
<hr>
<form action="" method="post">
First name: <input type="text" name="fname"> <?php echo $validatefname; ?>
<br>
Last name: <input type="text" name="lname"> <?php echo $validatelname; ?>
<br>
Age: <input type="number" name="age"> <?php echo $age; ?>
<br>

Designation :
  <input type="radio" id="Junior Programmer" name="designation" value="Junior Programmer">
  <label for="Junior Programmer">Junior Programmer</label>
  <input type="radio" id="Senior Programmer" name="designation" value="Senior Programmer">
  <label for="Senior Programmer">Senior Programmer</label>
  <input type="radio" id="Project Lead" name="designation" value="Project Lead">
  <label for="Project Lead">Project Lead</label>
  <br>
  <?php echo $validateradio; ?>
<br>


Preferred language
<br>

<input type="checkbox" id="JAVA" name="JAVA" value="JAVA">
JAVA<br>
<input type="checkbox" id="PHP" name="PHP" value="PHP">
PHPr<br>
<input type="checkbox" id="C++" name="C++" value="C++">
C++<br>

<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>


E-mail: <input type="email" name="email"> <?php echo $validateemail; ?>
<br>

Password: <input type="text" name="password"> <?php echo $validatepass; ?>
<br>

<input type="submit" value="SUBMIT">
<input type="reset" value="Reset">
</form>
</body>
</html>
