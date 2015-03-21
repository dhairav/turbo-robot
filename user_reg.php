<html>
<head>
	</head>
	<body>
		<form method="POST" action="#" >
		<table>
			<table border="1px" align="center" cellspacing="5px" cellpadding="5px">
				<tr>
					<td>
						<label for="ab">Username</label>
					</td>
					<td><input type="name" name="ab"/></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="gender" name = "phone"/></td>
				</tr>
				<tr>
					<td>gender</td>
					<td>
						<label>		
				<input type="radio" value="1" name="gender" value="M" />male
						</label>
						<label>
				<input type="radio" value="2" name="gender" value="F" />female
						</label>
					</td>
				</tr>
				<tr>
					<td>checkbox values</td>
					<td>	<input type="checkbox" value="1" name="hobbies[]"/>xy
						<input type="checkbox" value="1" name="hobby1"/>x
						<input type="checkbox" value="1" name="hobby2"/>y
					</td>
				</tr>
				<tr>
					<td>select option</td>
					<td>	<select>
							<option value="e" name="opt1">a</option>
							<option value="e" name="opt2">v</option>
							<option value="e" name="opt3">b</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>About User</td>
		                        <td><textarea name="address"></textarea></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><input type="text" name="age"/>
					</td>
				</tr>
				<tr>
					<td>submit form</td>
					<td><input type="submit" value="submit" name = "submit"/></td>
				</tr>
				<tr>
					<td>reset form</td>
					<td><input type="reset" value="reset"/></td>
				</tr>
		</form>
	</table>
</body>
</html>
<?php
include "InsertFunc.php";
if(isset($_POST["submit"]))
{
	$username =($_POST["ab"]);
	$password = ($_POST["password"]);
	$phone = ($_POST["phone"]);		
	$gender = ($_POST["gender"]);
	$aboutuser = ($_POST["address"]);
	$age = ($_POST["age"]);
	$userdata = array(
		"u_name" => $username,
		"u_password" => $password,
		"u_phone" => $phone,
		"u_gender" => $gender,
		"u_aboutuser" => $aboutuser,
		"u_age" => $age
	);

	$result = insert_user($userdata);

	if( $result ) {
		setcookie("id" , $result , ( time() + 3600 ) );
		header("Location:profile.php");
	} else {
		echo "error";
	}
}

?>
