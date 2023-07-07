<?php

require_once('includes/database.php');
$page_title = "Add recipe";
require_once ('includes/header.php');
if(empty($login))
{
  header('Location: index.php');
  exit;
}
?>
  <div class="container wrapper">

  <h1 class="text-center">ADD recipe</h1>
  <p class="lead text-center">Please add your desired recipe</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="processrecipe.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newRecipeName" class="col-sm-3 control-label">Recipe Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newRecipeName" name="recipe_name" placeholder="Recipe Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="recipeYear" class="col-sm-3 control-label">Writer Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="recipeYear" name="recipe_year" placeholder="Enter your name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="recipeRating" class="col-sm-3 control-label">Required Ingredients</label>
        <div class="col-sm-9">
        <!-- <input type="text" id="Rating" class="form-control" name="rating" placeholder="Enter Rating.." required> -->
        <textarea type="email" class="form-control" id="Rating" name="rating" rows="5" placeholder="Enter required ingredients.." required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="recipeBio" class="col-sm-3 control-label">Recipe</label>
        <div class="col-sm-9">
          <textarea type="email" class="form-control" id="recipeBio" name="bio" rows="15" placeholder="Write Recipe.." required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Recipe thumbnail URL</label>
        <div class="col-sm-9">
          <input type="text" id="newImage" class="form-control" name="image" placeholder="Enter URL.." required>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add recipe</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('includes/footer.php');
?>