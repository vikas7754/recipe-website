<?php
$page_title = "Dashboard";
require_once ('includes/header.php');
require_once ('includes/database.php');


//retrieve user id
$user_id = $session_id;

//define the select statement
$query_str = "SELECT * FROM users WHERE user_id=" . $user_id;
$review_str = "select review_content, review_id, review_rating, recipe_name, recipe_id from reviews join recipes on reviews.review_recipe_id=recipes.recipe_id where reviews.review_user_id=" . $user_id;

//execute the query
$result = $conn->query($query_str);
$review_result = $conn->query($review_str);


//retrieve the results
$result_row = $result->fetch_assoc();

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
} else { //display results in a table
	?>
	<div class="container wrapper">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<h1 class="text-center text-success">Hi <?php echo "$name"; ?>!</h1>
				<p class="lead">Welcome to your user dashboard! Here you can edit your information, see favorite recipes, and your own reviews!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<form name="edituser" class="form-horizontal" role="form" action="updateaccount.php" method="get" enctype="text/plain">
					<input type="hidden" name="id" value="<?php echo $result_row['user_id']; ?>"/>
					<div class="form-group">
						<label for="newUserName" class="col-sm-2 control-label" >Username <i class="fa-solid fa-circle-info" data-toggle="tooltip" title="You can not update username!"></i></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="newUserName" name="username" value="<?php echo $result_row['user_name']; ?>" required disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="newName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="newName" name="name" value="<?php echo $result_row['user_full_name']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="newEmail" name="email" value="<?php echo $result_row['user_email']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newPassword" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="newPassword" name="password" value="<?php echo $result_row['user_password']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<a href="javascript:document.edituser.submit()" class="btn btn-success">UPDATE</a>
							<a class="btn btn-danger" href="deleteuser.php?id=<?php echo $result_row['user_id'] ?>">DELETE ACCOUNT</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h2 class="text-center text-success">Your Favorite recipes</h2>
				<?php
				if (isset($items)) {
					$items_count_value = array_count_values($items);

					//display the favorites content
					foreach ($items_count_value as $id => $qty) {
						//select statement
						$query_str = "SELECT * FROM recipes WHERE recipe_id=" . $id;
						//execute the query
						$result = $conn->query($query_str);
						$result_row = $result->fetch_assoc();

						$id = $result_row['recipe_id'];
						$img = $result_row['recipe_img'];
						$title = "<a href='recipedetails.php?id= " . $result_row['recipe_id'] . "'>" . $result_row['recipe_name'] . "</a>";

						?>
						<div class="row recipe-list">
							<div class="col-xs-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<?php echo "<img src='$img' alt='Image Not Found' >"; ?>
											<?php echo "$title";?>
										</h3>
									</div>
								</div>
							</div>
						</div>

					<?php
					}
				}else {
					echo "<p class='lead text-center'>You don't have any favorite recipes!</p>";
				}
				?>
			</div>
			<div class="col-xs-6">
				<h2 class="text-center text-success">Your Reviews</h2>
				<?php
					while ($review_row = $review_result->fetch_assoc()) { ?>

						<div class="panel panel-default">
							<div class="panel-heading recipe-list">
								<h3 class="panel-title">
									<a href="recipedetails.php?id=<?= $review_row['recipe_id'] ?>"><?= $review_row['recipe_name'] ?></a>
								</h3>
							</div>
							<div class="panel-body">
								<h4>Rating: <span class="<?php
									if ($review_row['review_rating'] >= 4) {
										echo 'text-success';
									} elseif ($review_row['review_rating'] < 2) {
										echo 'text-danger';
									}
									?>"> <?= $review_row['review_rating'] ?></span></h4>

								<p class="lead"><?= $review_row['review_content'] ?></p>
								<a class="btn btn-danger" href="deletereview.php?id=<?= $review_row['review_id'] ?>">DELETE</a>
							</div>
						</div>
					<?php
					} ?>
			</div>

		</div>


	</div>
<?php
}
include ('includes/footer.php');
?>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>