
<!DOCTYPE html>
<html>
<head>
	<title>Search Employee</title>
	 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;

  var uinterest=  document.getElementById("uinterest").value;

  var udesignation=  document.getElementById("udesignation").value;

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/FTLabExam/control/getUser.php", true);

  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("uname="+uname+"&uinterest="+uinterest+"&udesignation="+udesignation);
  


}

</script>
</head>
	
</head>
	 

<body>

	<legend>

		<hr>
		<h1>Serach Faculty </h1>
		Search By Faculty Name:
		  <input type="text" id="uname" ><br><br>
		  Search By Research Interest:
		  <input type="text" id="uinterest" ><br><br>
		  Search By Designation: <select id="udesignation" name ="udesignation">

  <option value="">select Designation</option>

  <option value="Lecturer">Lecturer</option>
  <option value="Assistant Professor">Assistant Professor</option>

  <option value="Professor">Professor</option>

</select><br><br>
  <button name="submit" onclick="showmyuser()">Search</button>
  <hr>

<p id="mytext"></p>

		
	</legend>
	

</body>
</html>