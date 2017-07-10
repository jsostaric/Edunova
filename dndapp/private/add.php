<?php include_once '../config.php'; provjeraLogin();

$err = array();


if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["name"]) && isset($_POST["email"])) {
	
	if(trim($_POST["username"]) === "") {
		$err["username"] = "Please enter a username";
	}


	
	if(trim($_POST["password"]) === "") {
		$err["password"] = "Please enter a pasword";
	}


	
	if(trim($_POST["name"]) === "") {
		$err["name"] = "Please enter a name";
	}


	if(trim($_POST["email"]) === "") {
		$err["email"] = "Please enter an email";
	}
	
	if(count($err) == 0) {
	$stmt = $db->prepare("INSERT INTO player(user_name,password,name,email) values(:username, :password, :name, :email)");
	$result = $stmt->execute($_POST);
	}
}

/*
if(count($err) == 0) {
	$stmt = $db->prepare("INSERT INTO player(user_name,password,name,email) values(:username, :password, :name,:email)");
	$result = $stmt->execute($_POST);
}*/
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
			<div class="large-4 columns large-centered">
				<?php if(isset($err["username"])) {
					echo "<div class='alert callout'>". $err["username"] . "</div> ";
				} 
				if(isset($err["password"])) {
					echo "<div class='alert callout'>". $err["password"] . "</div> ";
				} 
				if(isset($err["name"])) {
					echo "<div class='alert callout'>". $err["name"] . "</div> ";
				} 
				if(isset($err["email"])) {
					echo "<div class='alert callout'>". $err["email"] . "</div> ";
				} 
				
				
				?>
				
				
				<form method="post">
					<fieldset class="fieldset">
						<legend>Add Character</legend>
						
						<label for="username">Username</label>
						<input type="text" name="username" id="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ""; ?>"
						<?php if(isset($err["username"])) {
							echo " style='background-color: #f7e4e1'";
						} ?>/>
						
						<label for="password">Password</label>
						<input type="password" name="password" id="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ""; ?>"
						<?php if(isset($err["password"])) {
							echo "style='background-color: #f7e4e1'";
						} ?>"/>
						
						<label for="Name">Name</label>
						<input type="text" name="name" id="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?>"
						<?php if(isset($err["name"])) {
							echo "style='background-color: #f7e4e1'";
						} ?>"/>
						
						<label for="email">Email</label>
						<input type="text" name="email" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>"
						<?php if(isset($err["email"])) {
							echo "style='background-color: #f7e4e1'";
						} ?>"/>
						
						
						<input type="submit" class="alert button expanded" value="Add"/>
						<?php if(isset($result) && $result >0) {
							echo "<div class='success callout'>Added</div>";
						} ?>
					</fieldset>
					
				</form>
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
