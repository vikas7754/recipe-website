<?php
//start session
@session_start();

//number of items in the shopping cart
$count = 0;

//retrieve the cart content
if (isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];

	if ($cart) {
		$items = explode(',', $cart);
		$count = count($items);
	}
}

//check to see if a user if logged in
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}

if (isset($_SESSION['role'])) {
	$role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
	$session_id = $_SESSION['id'];
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css?v=<?php echo time(); ?>" />
	<link rel="stylesheet" href="assets/css/secondary.css?v=<?php echo time(); ?>" />
	<script src="https://kit.fontawesome.com/465a387109.js" crossorigin="anonymous"></script>
	<script>
		<?php include_once "main.js" ?>
	</script>
</head>

<body>

	<div class="headernav">
		<div class="socialnav">
			<a href="https://www.instagram.com/divine_vikas/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCwkcM3j5sXoX5xmkvucVBcQ" target="_blank"><i class="fa fa-fw fa-youtube"></i></a>
			<a href="https://www.linkedin.com/in/vikas7754/" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
			<a href="https://www.hackerrank.com/vikask4590" target="_blank"><i class="fab fa-hackerrank"></i></a>
			<a href="https://github.com/vikas7754" target="_blank"><i class="fa fa-fw fa-github"></i></a>
		</div>
	</div>
	<div id="header">
		<?php if (!empty($login)) : ?>
			<div class="topnav" id="myTopnav">
				<a href="index.php" class="active">
					<i class="fa fa-fw fa-home"></i>Home
				</a>
				<a href="recipes.php">Recipes</a>
				<a href="reviews.php">Reviews</a>
				<a href="addrecipe.php">Add Recipes</a>
				<a href="contact.php">Contact us</a>
				<a href="logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		<?php endif;
		if (empty($login)) : ?>
			<div class="topnav" id="myTopnav">
				<a href="index.php" class="active">
					<i class="fa fa-fw fa-home"></i>Home
				</a>
				<a href="recipes.php">Recipes</a>
				<a href="reviews.php">Reviews</a>
				<a href="contact.php">Contact us</a>
				<a href="registration.php">Register</a>
				<a href="loginform.php">Login</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		<?php endif; ?>
	</div>

	<div class="logo_container">
		<?php if (!empty($login)) : ?>
			<div class="logo_img text-center">
				<a href="useraccount.php">
					<h1>Welcome, <?php echo $name; ?></h1>
				</a>
			</div>
		<?php endif;
		if (empty($login)) : ?>
			<form class="navbar-form navbar-right" role="form" action="login.php" method="post">
				<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-success">SIGN IN</button>
			</form>
		<?php endif; ?>
	</div>
	