<?php include_once '../config.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
<?php include_once '../templates/head.php';
?>
</head>
<body>

	<?php include_once '../templates/menu.php'; ?>

	<div class="row">
		<?php 
		echo "<h1>Test</h1>";
			$query = $db->query("SELECT * FROM player");
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			
			foreach ($result as $row) {
				echo $row->user_name . "<br>";
			}
		
		 ?>
	</div>

	<?php include_once '../templates/footer.php';	?>

	<?php include_once '../templates/scripts.php';	?>
</body>
</html>
