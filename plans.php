<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>database linkage</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}
</style>
</head>
<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="home.php"><i class="fa fa-home"></i>Home</a>
				<a href="plans.php">plans</a>
				<a href="testimonials.php">testimonials</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="about.php"><i class="fas fa-user-circle"></i>About</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>


<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
</tr>

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$sql = "SELECT id, plan_Quality, description, price FROM plans";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["plan_Quality"] . "</td><td>"
. $row["description"]. "</td></tr>"; $row["price"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>


</table> 
</body>
</html>

