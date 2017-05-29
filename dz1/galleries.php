<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->
	<head>
		<?php
		include_once 'head.php';
  ?>

	</head>
	<body>

		<div class="row page_wrap">
			<!-- page wrap -->
			<div class="twelve columns">
				<!-- page wrap -->

				<?php
	include_once 'izbornik.php';
  ?>

				<div class="row hide-for-small">

					<div class="twelve columns">
						<div class="heading_dots">
							<h1 class="heading_supersize"><span class="heading_center_bg">Standard Gallery</span></h1>
						</div>
					</div>

				</div><!-- end row -->

				<div style="clear: both"></div>

				<div id="container">

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin1.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin2.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin3.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin4.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin5.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin6.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin7.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin8.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin9.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin10.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin11.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin12.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin1.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin2.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin3.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin4.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin5.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin6.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin7.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin8.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin9.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin10.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin11.jpg' /></a>
					</div>

					<!-- photo -->
					<div class='box photo col2'>
						<a href="#"><img src='images/pin12.jpg' /></a>
					</div>

				</div>
				<!-- end Masonry container -->

				<footer>
			<?php include_once 'footer.php'; ?>
		</footer>
		
			</div>
		</div>
		<!-- end page wrap) -->
		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript"></script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript"></script>
		<!-- Masonry for galleries -->
		<script src="javascripts/masonry.js" type="text/javascript"></script>
		<script type="text/javascript">
			//<![CDATA[
			$(function() {
				var $container = $('#container');
				$container.imagesLoaded(function() {
					$container.masonry({
						itemSelector : '.box',
						isFitWidth : true,
						isAnimated : true
					});
				});
			});
			//]]>
		</script>
		<!-- END Masonry -->
	</body>
</html>