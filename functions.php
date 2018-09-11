<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', 'jackblack1', 'MPA_LLC1');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 



// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM Employees WHERE employees_id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: mavdeck.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grab form values
	$username = e($_POST['uname']);
	$password = e($_POST['pword']);

	// make sure form is filled out properly
	if (empty($username)) {
		array_push($errors, "Try again");
	}
	if (empty($password)) {
		array_push($errors, "Try again");
	}

	// attempt login if no errors 
	if (count($errors) == 0) {
		
		//$password = md5($password);

		$query = "SELECT * FROM Employees WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Welcome";
				$_SESSION['photo'] = $logged_in_user['photo'];
				header('location: adminwork.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Welcome";
                $_SESSION['photo'] = $logged_in_user['photo'];
				header('location: employeework.php');
			}
		}else {
			array_push($errors, "Failed to login");
		}
	}
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
