<!DOCTYPE html>
<html>
<head>
	<title>Form Pendafataran</title>
</head>
<body>
	<form action="/halo" method="POST">
    @csrf

	<h2>Buat Account Baru!</h2>
	<h3>SignUp Form</h3>

	First name:<br>
	<input type="text" name="nama_depan" /><br><br>

	Last name:<br>
	<input type="text" name="nama_belakang" /><br><br>

	Gender:<br>
	<input type="radio" name="jk" checked />Male <br>
	<input type="radio" name="jk" />Female <br>
	<input type="radio" name="jk" />Other <br>
	<br>

	Nationality:<br>
	<select>
		<option>Indonesian</option>
		<option>American</option>
		<option>Malaysia</option>
	</select>
	<br>
	<br>
	Language Spoken:<br>
	<input type="checkbox" name="bhs_indo" checked />Bahasa Indonesia<br>
	<input type="checkbox" name="bhs_eng" />English<br>
	<input type="checkbox" name="bhs_indo" />Other<br>

	<br>
	<br>
	Bio:<br>
	<textarea name="biodata" rows="5" cols="20"> 

	</textarea>
	<br>

	<input type="submit" name="Sign Up">
	
</form>
</body>
</html>