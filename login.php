<?php
session_start();
<?php include('errors.php') ?>
// initializing variables
$username = "";
$password = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', 'jackblack1', 'MPA_LLC1');

if (isset($_POST['login'])) {
   $username = mysqli_real_escape_string($db, $_POST['uname']);
   $password = mysqli_real_escape_string($db, $_POST['pword']);
   if (empty($username)) { array_push($errors, "Login Unsuccessful"); }
   if (empty($password)) { array_push($errors, "Login Unsuccessful"); }



  	$query = "SELECT * FROM Employees WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: adminwork.html');
  	  }else {
  		array_push($errors, "Login Unsuccessful");
  		}
	}
?>

