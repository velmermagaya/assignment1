<?php //beginning of a php script

//declaring variables - server log in
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE StudentRecord (
stuname VARCHAR (30),
assignment1 Int(4) NOT NULL,
assignment2 Int(4) NOT NULL,
examination Int(4) NOT NULL,
)";

$sql = "INSERT INTO StudentRecord (stuname, assignment1, assignment2, examination)
VALUES ('stuname', 'assignment1', 'assignment2', 'examination)";
		
//declaring and assigning variables for table columns
$x = assignment1; 
$y = assignment2;
$z = examination;
$t = totalassign;
$v = averageassign;
$u = averageexam;

//sql arithmetic calculations for the final mark
$t = $x + $y;
$v = $t * 0.3;
$u = $z * 0.7;
<?
<html>
<body>

//posting final mark to display on browser
Final Mark is : <?php echo $_POST $v + $u;?>

</body>
</html>
