<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title"><a href="<?php echo $route; ?>"><?php echo $title; ?></a></div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><a href="<?php echo $route; ?>index.php"><?php echo $title; ?></a></li>
      <li>
      	<?php if(isset($_SESSION["session"])): ?>
        <li><a href="<?php echo $route; ?>private/dashboard.php">Profile</a></li>
        <li><a href="<?php echo $route; ?>private/pages/characters.php">Characters</a></li>
        <li><a href="<?php echo $route; ?>private/pages/adventures.php">Adventures</a></li>
        
        <?php endif; ?>
      </li>
      <li><a href="<?php echo $route; ?>public/about.php">About</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
    	
      <li>
      	<?php if(!isset($_SESSION['session'])):  ?>
      	<a href="<?php echo $route; ?>public/login.php" class="alert button">Login</a>
      	<?php else: ?>
       	<a href="<?php echo $route; ?>public/logout.php" class="alert button">Logout</a>
      	<?php endif; ?>
      </li>
    </ul>
  </div>
</div>