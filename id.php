<!DOCTYPE html>
<html>
<body>
	<title>Students Information</title>
</head>
<body>

	<form action= "method" = "GET">
		Lastname<input type="text" name="lname"> <br>
		Firstname<input type="text" name="fname"> <br>
		Middlename<input type="text" name="mname" maxlength="3"> <br>
		Birthdate<input type="text" name="birthdate"> <br>
		ID Number<input type="text" name="idnumber" maxlength="13"> 
		<br>

        <select name="department[]">
			<option>COA</option>
			<option>CITCS</option>
			<option>CAS</option>

		</select>
	<br>

	    <select name="course[]">
	    	<option>BSDA</option>
	    	<option>BSCS</option>
	    	<option>BSIT</option>

	    </select>

</form>