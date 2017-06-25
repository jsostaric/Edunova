<?php include_once '../config.php'; 

if(!isset($_SESSION["session"])) {
	header("location:" . $route . "public/login.php?unauthorized");
	exit;
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../templates/head.php'; ?>
  </head>
  <body>
  	
  	<?php include_once '../templates/menu.php'; ?>
  	
    <div class="row">
      <div class="large-4 columns large-centered">
        <h1>Dashboard</h1>
      </div>
    </div>

    
    </div>

    <?php include_once '../templates/footer.php'; ?>
      
    <?php include_once '../templates/scripts.php'; ?>
  </body>
</html>
