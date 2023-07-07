<?php
$page_title = "Recipes and Reviews";
include_once('includes/header.php');
?>
<div class="x1-container">
	<div class="x1-subcontainer">
		<div class="x1-content">
			<h1>Hello & Welcome</h1>
			<p>To add you own recipes and reviews, please login. If you are not registred then please register.</p>
			<a href="registration.php" class="btn btn-primary btn-md">Register</a>
		</div>
		<div>
			<img src="assets/img/11.png" height="300px">
		</div>
	</div>
	<div class="x1-subcontainer">
		<div>
			<img src="assets/img/jalebi.png" height="300px">
		</div>
		<div class="x1-content">
			<h1>😛😛😛</h1>
			<p>This website has a massive collection of recipes that are submitted, rated and reviewed by people who are passionate about food. <br>Find thousands of tested recipes, menus, cooking shortcuts, dinner ideas</p>
		</div>
	</div>
	<div class="x1-subcontainer">
		<div class="x1-content">
			<h1>🤤🤤🤤</h1>
			<p>Find and share everyday cooking inspiration on Allrecipes. Discover recipes, cooks, videos, and how-tos based on the food you love.<br>Cook with confidence. Enjoy your food. Find recipes, search our encyclopedia of cooking tips and ingredients, watch food videos, and more.</p>
		</div>
		<div>
			<img src="assets/img/maggie.png" height="300px">
		</div>
	</div>
	<div class="x1-subcontainer">
		<div>
			<img src="assets/img/paneer.png" height="300px">
		</div>
		<div class="x1-content">
			<h1>😋😋😋</h1>
			<p>This website is here to help you cook delicious meals with less stress and more joy. We offer recipes and cooking advice for home cooks, by home cooks. <br>Search recipes for your favorite desserts, appetizers, main dish recipes, and more. Find an array of easy recipes as well as home cooking tips,</p>
		</div>
	</div>
</div>
<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<h2>CREATE ACCOUNT</h2>
			<p>Sign up for an account in order to add a review to your favorite recipe</p>
			<p><a class="btn btn-default" href="registration.php" role="button">SIGN UP &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>LIST RECIPES</h2>
			<p>Browse our extensive list of recipe titles along with ratings, years, a short synopsis, and even reviews!</p>
			<p><a class="btn btn-default" href="recipes.php" role="button">VIEW RECIPES &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>LIST REVIEWS</h2>
			<p>Browse all of our reviews and find out more about what others thought of your favorite recipes!</p>
			<p><a class="btn btn-default" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>
		</div>
	</div>

</div> <!-- /container -->
<!-- Go to Top button -->
<div id="topbutton">
    <div id="basso" onclick="topbtn()">
      <div id="freccia">
        <span id="top"></span>
      </div>
    </div>
  </div>

<?php
include_once('includes/footer.php');
?>