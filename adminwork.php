<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: mavdeck.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: mavdeck.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<link rel="stylesheet" href="larry1.css" >
<script src="table.js"></script>

</head>
<body onload="makeTableScroll();">
<div class="tab">
<button class="tablinks" onclick="showTab(event, 'bio')"id="defaultOpen">My Bio</button>
<button class="tablinks" onclick="showTab(event, 'time')">Time card</button>
<button class="tablinks" onclick="showTab(event, 'account')">My Accounts</button>
<button class="tablinks" onclick="showTab(event, 'info')">Employee Info </button> 
<button class="tablinks" onclick="showTab(event, 'caseload')">Employee Caseload</button>
<a href="adminwork.php?logout='1'"><button class="tablinks">Logout </button></a>
</div>

<div class="tabcontent" id="bio">
<?php if (isset($_SESSION['success'])) : ?>
			<div  >
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
<h3>Today is <?php echo date("m-d-Y");?> </h3>
<img class="profile" src="<?php echo $_SESSION['photo'];?>" > 
<p>Info: </p>
</div>
<div class="tabcontent" id="time">
<h1> Time Card</h1>
<p>Time info:</p>
</div>

<div class="tabcontent" id="account">
<h1>My Accounts</h1>
<p>Info about accounts:</p>
</div>
<div class="tabcontent" id="info">
<h1>Employee Info</h1>
<p>Admin Only!</p>
<br /> <br /> 
<button class="taskbutton" onclick="loadTable()">Show Employees </button>
<br />
    <p class="table">
    </p>
</div>

<div class="tabcontent" id="caseload">
<h1>Employee Caseload</h1>
<p>Admin Only!</p>
<br /> <br />
<button class="taskbutton" onclick="acc()">Show All Accounts </button>
<br /> <br>
   
   <p class="pac tstyle">
	</p>
	       
</div>
<script src="showtab.js"></script>
<script src="acc.js"></script>

</body>
</html>
