<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="mycss.css">
	<form action="" method="post" enctype="multipart/form-data">
</head>
<body>

	<div id=header>
        <center>
		<br>
		<h3 id=abc >ABC Management System </h3>
		<h4 id=future>We Create Future </h4>
</center>
	</div>

   <div class="bar">
   <a>Home</a>
  <a>About US</a>
  <a>Shop</a>
   </div>

   
	<h3 id=registration>Registration Form</h3><hr>

	<form >

		<div class="input">
	First Name :
		<input type="text" name="fname"> <br>
		</div>


        <p class="input">
	Last Name :
		<input type="text" name="lname">  <br>
	    </p>
        
        <p class="input">
	Age :
		<input type="text" name="age"> <br>
	    </p>

	    <p class="input">
	Designation :
	    <input type="radio" id="jp" name="Designation" value="Junior Programmer">
	          <label for="jp">Junior Programmer</label>
	    <input type="radio" id="sp" name="Designation" value="Senior Programmer">
	          <label for="sp">Senior Programmer</label>
	    <input type="radio" id="pl" name="Designation" value="Project Leader">
	          <label for="pl">Project Leader</label>
	          <br>
	    </p>      
        
        <p class="input">
	Preferred Language:
	    <input type="checkbox" id="java" name="java" value="JAVA">
	    JAVA
	    <input type="checkbox" id="php" name="php" value="PHP">
	    PHP
	    <input type="checkbox" id="c++" name="c++" value="C++">    
	    C++  <br>
	    </p>


        <p class="input">
	Email :
		<input type="text" name="email"> <br>
		</p>
        
        <p class="input">
    Password :
		<input type="text" name="password"> <br>
		</p>


        <p class="input">
    Please choose a file :
    <input type="file" name="filetoupload"><br>
        </p>
    
	<input type="submit" name="submit" value="Sumbit" id="submit">
	<input type="reset" name="reset" value="Reset" id="reset">

	</form>

	
</body>
</html>