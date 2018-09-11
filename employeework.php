<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: mavdeck.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<link rel="stylesheet" href="larry1.css" >
</head>
<body>
<div class="tab">
<button class="tablinks" onclick="showTab(event, 'bio')"id="defaultOpen">My Bio</button>
<button class="tablinks" onclick="showTab(event, 'time')">Time card</button>
<button class="tablinks" onclick="showTab(event, 'account')">My Accounts</button>
<a href="employeework.php?logout='1'"><button class="tablinks">Logout </button></a>
</div>
<div class="tabcontent" id="bio">
<?php if (isset($_SESSION['success'])) : ?>
			<div>
				<h1>
					<?php 
						echo $_SESSION['success']; 
						echo " ";
						echo $_SESSION['user']['username'];
						unset($_SESSION['success']);
					?>
				</h1>
			</div>
		<?php endif ?> 
<h3>Today is <?php echo date("m-d-Y");?></h3>
<img class="profile" src="<?php echo $_SESSION['photo'];?>" > 
<p>Info:</p>
</div>
<div class="tabcontent" id="time">
<h1> Time Card</h1>
<p>Time info:</p>
</div>
<div class="tabcontent" id="account">
<h1>My Accounts</h1>
<p>Info about accounts:</p>
</div>
<script src="showtab.js"></script>
</body>
</html>
