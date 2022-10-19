<!DOCTYPE html>
<html>
<body>
	<title>Students Information</title>
</head>
<body>

	<form action= "method" = "GET">
		Last name:<br><input type="text" name="lname"> <br>
		<br>
		First name:<br><input type="text" name="fname"> <br>
		<br>
		Middle name:<br><input type="text" name="mname" maxlength="3"> <br>
		<br>
		Birthdate:<br><input type="text" name="birthdate"> <br>
		<br>
		ID Number:<br><input type="text" name="idnumber" maxlength="11"> 
		<br>
		<br>


        Department:<select name="department[]">
			<option>CITCS</option>
			<option>COA</option>
			<option>CAS</option>

		</select>
	<br>
	<br>
	

	    Course:<select name="course[]">
	    	<option>BSIT</option>
	    	<option>BSCS</option>
	    	<option>BSDA</option>

	    </select>
	    <br>
	    <br>
	    <input type="submit" value="Submit">

</form>