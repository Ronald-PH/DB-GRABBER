<html lang="en">
<head>
<title>Dashboard</title>
<style>
body {
	background-color: black;
}
.text {
	height: 250px;
	width: 250px;
	margin-left: 15px;
	margin-bottom: 15px;
	border-radius: 5px;
}
input {
	border-radius: 5px;
}
.container {
	width: 500px;
	border: 0.5px solid black;
	margin-left: auto;
	margin-right: auto;
	background-color: green;
}
form {
	padding: 15px;
}
.submit {
	background-color: red;
	border: 1px solid black;
	height: 30px;
	border-radius: 5px;
}
p {
	text-align: center;
}
a {
	text-decoration: none;
}
</style>
</head>
<body>
<div class="container">
<form method="POST">
<label for="dbhost">DB HOST</label><br>
<input type="text" name="dbhost"><br>
<label for="dbuser">DB USER</label><br>
<input type="text" name="dbuser"><br>
<label for="dbpass">DB PASS</label><br>
<input type="text" name="dbpass"><br>
<label for="dbname">DB NAME</label><br>
<input type="text" name="dbname"><br>
<label for="dbtable">DB TABLE</label><br>
<input type="text" name="dbtable"><br>
<label for="dbcolumn">DB COLUMN</label><br>
<input type="text" name="dbcolumn"><br><br>
<input type="submit" value="Grab" name="grab" class="submit">
</form>
<textarea class="text">
<?php
if(isset($_POST['grab'])) {
	$dbhost = $_POST['dbhost'];
	$dbuser = $_POST['dbuser'];
	$dbpass = $_POST['dbpass'];
	$dbname = $_POST['dbname'];
	$dbtable = $_POST['dbtable'];
	$dbcolumn = $_POST['dbcolumn'];
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$query = "SELECT * FROM $dbtable";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while($grab = mysqli_fetch_assoc($result)) {
			?>
			<?php echo $grab[$dbcolumn]; ?>
			<?php
		}
	}
	
}

?>
</textarea>
<p>(c) <a href="https://www.facebook.com/ronald.soberano.31">Ronald-PH</a> & <a href="https://www.facebook.com/PhilippineCyberEagles">Philippine Cyber Eagles</a></p>
</div>
</body>
</html>