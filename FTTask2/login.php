<!DOCTYPE html>
<html>
<head>
<script src="Myjs.js"></script>
</head>

<body>
<h1>Registration form </h1>
<p id='mytext'> </p>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">


First name: <input type="text" id="fname" name="fname"> <p id="jfn"></p> 
Last name: <input type="text" id="lname" name="lname"> <p id="jln"></p> 
Age: <input type="text" id="age" name="age"> <p id="jage"></p> 

<p>Designation
  <input type="radio" id="opt1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="opt2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="opt3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>
</p>

<p id='vdesig'> </p>
<br>

Preferred language
<input type="checkbox" id="lan1" name="lan1" value="JAVA">
JAVA
<input type="checkbox" id="lan2" name="lan2" value="PHP">
PHP
<input type="checkbox" id="lan3" name="lan3" value="C++">
C++
<br>
<p id='jlan'> </p> 
<br>


E-mail: <input type="text" name="email"> <p id='jemail'> </p>
<br>

Password: <input type="password" id="password" name="password"> <p id='jpass'> </p>
<br>

Please choose a file  <input type="submit" value="Choose File"> 
No file choosen
<br>
</form>
<input type="submit" value="Submit">
<input type="submit" value="Reset">

</div>
</body>
</html>
