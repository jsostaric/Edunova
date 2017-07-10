<?php include_once '../config.php'; ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../templates/head.php'; ?>
  </head>
  <body>
  	
  	<?php include_once '../templates/menu.php'; ?>
  	
    <div class="row">
      <div class="large-12 columns">
        <div class="callout">
        	
        	<div class="large-4 columns large-centered">        		
        		<h1>Login D&D app</h1>
        		
        		<?php if(isset($_GET["neuspio"])) {
        			echo "<div class='alert callout'> wrong username and/or password</div>";	
        		} 
				
				if(isset($_GET["odlogiran"])) {
					echo "<div class='success callout'>You successfully logged out</div>";
				}
				
				
				if(isset($_GET["unauthorized"])){
							echo "<div class='warning callout'>You must log in first!</div>";
				}
				
        		
        		?>
        		
        		<form method="post" action="<?php echo $route; ?>auth.php">
	          	<label for="username">Username:</label>
	          	<input type="text" name="username" id="username" placeholder="edunova" value="<?php echo isset($_GET["username"]) ? $_GET["username"] : ""; ?>" />
	          	<label for="password">Password:</label>
	          	<input type="password" name="password" id="password" placeholder="e" />
	          	<input class="button alert expanded" type="submit" name="submit" value="Submit" />
          		</form>
        	</div>

          </div>
        </div>
      </div>
    </div>

    <?php include_once '../templates/footer.php'; ?>
      
    <?php include_once '../templates/scripts.php'; ?>
  </body>
</html>
