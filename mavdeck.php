<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<link rel="stylesheet" href="larry1.css" >
</head>
<body class="mavdeckback">
<div class="container">
<img src="morko.png" class="watermark">
 <div class="mavhead">
<h1>Maverick's Deck</h1>
<h3>Please Enter Login Credentials </h3>
</div>

<div class="login">

<form method="post" action="mavdeck.php" autocomplete="off">

<label>Username <br></label>
<input type="text" name="uname" required="required">
<br><br>
	
	 
<label>Password <br></label>
<input type="password" name="pword" required="required">
<button type="submit" name="login" class="logbutton">Login</button>

<?php echo display_error(); ?>
</form>
</div>
<div class="mavhead"><span> <a href="#">Forgot Username or Password? </a> </span> </div>
</div>

</body>
</html>
