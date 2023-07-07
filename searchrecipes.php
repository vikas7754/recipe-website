<?php

$page_title = "Search Recipes";

require_once ('includes/header.php');
require_once('includes/database.php');

$name = $_GET['recipe'];

//select statement
$query_str = "SELECT * FROM $tblrecipes WHERE recipe_name LIKE '%" .$name. "%' OR recipe_bio LIKE '%" .$name. "%'";

//execut the query
$result = $conn->query($query_str);

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
	    <h1 class="text-center">Search Results</h1>
	    
	    <div class="row">
			<div class="search-container">
				<form action="<?=$_SERVER['PHP_SELF']?>" class="form-inline search-form" method="get" role="form">
					<div class="input-group">
						<label class="sr-only" for="recipeSearch">Search recipes</label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="recipe" placeholder="Search recipes" id="recipeSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>
		</div>
    
    <?php 
    	$num_rows = mysqli_num_rows($result);
    	if ($num_rows == 0) {
    		echo "<p class='lead text-center'>No results found for <strong>". $name . "</strong>. Please search again.</p>";
    	} else {
        //insert a row into the table for each row of data
		$i = 0;
		while ( $result_row = $result->fetch_assoc() ) :
			$i++;
			if ($i == 1) :
	?>
			<div class="row">
			<?php endif; ?>
				<div class="col-xs-4">
					<div class="thumbnail">
						<div class="caption">
							<div class="text-center">
								<a href="recipedetails.php?id=<?php echo $result_row['recipe_id']?>">
									<img src="<?php echo $result_row['recipe_img'] ?>" />
								</a>
							</div>
								<h3 class="text-center">
									<?php
									echo "<a href='recipedetails.php?id=" . $result_row['recipe_id'] . "'>", $result_row['recipe_name'], "</a>";
									?>
								</h3>
						</div>
					</div>
				</div>
		<?php if ($i == 3) : ?>
			</div>
		<?php $i=0; endif; endwhile; ?>
		</div>
	</div>
  <?php
		}
		// clean up resultsets when we're done with them!
	    $result->close();
	}
	
	// close the connection.
	$conn->close();
	
	include ('includes/footer.php');