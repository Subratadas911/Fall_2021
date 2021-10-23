<?php include "control/allprocess.php"; ?>



<!DOCTYPE html>

<html>
<body>
<h1>Education</h1>
<hr>
<form action="" method="post">

University:<br>
 <input type="text" name="uni"> <?php echo $validateuni; ?>
<br><br>
Degree: <br>
<input type="text" name="degree"> <?php echo $validatedegree; ?>
<br><br>
Major:<br>
 <input type="text" name="major"> <?php echo $validatemajor; ?>
<br><br>
Results:<br>
 <input type="text" name="result"> <?php echo $validateresult; ?>
<br><br>
Passing Year:<br>
<input type="date" name="psy"> <?php echo $psy; ?>

<br>
<br>



<input type="submit" value="Submit">

</form>

</body>
</html>