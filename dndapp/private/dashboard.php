<?php

include_once '../config.php';
provjeraLogin();

$cond = isset($_GET["cond"]) ? $_GET["cond"] : "";
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once '../templates/head.php';
		?>
	</head>
	<body>

		<?php
		include_once '../templates/menu.php';
		?>

		<div class="row">
			<div class="large-2 columns large-centered">
				<h1>Dashboard</h1>
			</div>
				<div class="large-8 columns large-centered">
				<div class="callout">
					
						<div class="large-3 columns">
							<form method="GET">
								<input type="text" placeholder="search" name="cond" 
								value="<?php echo $cond; ?>"/>	
							</form>
						</div>
						<div class="large-2 columns">
							<a href="add.php" class="success button expanded">Dodaj novi</a>
						</div>
					
					<table>
						<thead>
							<tr>
								<th>User Name</th>								
								<th>Name</th>
								<th>Email</th>												
								<th>Action</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
								$stmt = $db->query("SELECT * FROM player WHERE user_name LIKE :cond");
								$cond = "%" . $cond . "%";
								$stmt->execute(array("cond"=> $cond));
								$result = $stmt->fetchALL(PDO::FETCH_OBJ);
								
								foreach($result as $row):
								
							 ?>
							<tr>
								<td><?php echo $row->user_name; ?></td>							
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><a href="#">Update</a> <a href=#>Delete</a></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		</div>

		</div>

		<?php
		include_once '../templates/footer.php';
		?>

		<?php
		include_once '../templates/scripts.php';
		?>
	</body>
</html>
