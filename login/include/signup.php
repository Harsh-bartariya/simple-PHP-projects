<?php 
 //session_start();
 //include_once 'include/dbh.inc.php';


$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];


$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName = "loginn";

//$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);


//$sql= "INSERT INTO users( user_first, user_last, user_email, user_pwd) VALUES('$first','$last','$email','$password ')";

//mysqli_query($conn, $sql);
$conn = new mysqli('localhost','root','','loginn');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO users(username, password, email) values('$username', '$password','$email')");
		//$stmt->bind_param("sssssi", $first, $last,$email, $password);
		$execval=$stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		header("Location: login/home.php?logged in=success");
		$stmt->close();
		$conn->close();
	}

header("Location: login/homehome.php?logged in=success");

?>