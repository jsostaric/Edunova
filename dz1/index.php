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

				<div class="show-for-large-up">
					<div class="row">
						<div class="twelve columns">
							<div id="featured">
								<img src="images/demo1.jpg" alt="" />
								<img src="images/demo2.jpg" alt="" />
								<img src="images/demo3.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>

				<div class="row hide-for-small">

					<div class="twelve columns">
						<div class="heading_dots">
							<h1 class="heading_supersize" style="margin-bottom:10px"><span class="heading_center_bg">This is Epic!</span></h1>
						</div>
					</div>

				</div><!-- end row -->

				<div class="row">
					<div class="three columns">
						<h3>Adipiscing Elit</h3>

						<p>
							<span class="dropcap_green">1</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra, lacus id interdum ultrices, elit metus semper tellus, vel lacinia libero purus vitae risus. Integer a eros sit amet felis tincidunt commodo.
						</p>
					</div>

					<div class="three columns">
						<h3>Lectus Congue</h3>

						<p>
							<span class="dropcap_black">2</span> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus et magnis dis parturient montes.
						</p>
					</div>

					<div class="three columns">
						<h3>Gravida Pharetra</h3>

						<p>
							<span class="dropcap_black">3</span> Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros. Vestibulum placerat dui sit amet quam.
						</p>
					</div>

					<div class="three columns">
						<h3>Gravida Pharetra</h3>

						<p>
							<span class="dropcap_black">4</span> Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros. Vestibulum placerat dui sit amet quam.
						</p>
					</div>

				</div><!-- end row -->

				<hr/>

				<div class="row" style="padding-top: 20px">

					<div class="four columns">
						<img src="images/demo2_small.jpg" alt="desc" />
						<h3>Adipiscing Elit</h3>
						<p>
							<em>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci.</em>
						</p>
					</div>

					<div class="four columns">
						<img src="images/demo1_small.jpg" alt="desc" />
						<h3>Adipiscing Elit</h3>
						<p>
							<em>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci.</em>
						</p>
					</div>

					<div class="four columns">
						<img src="images/demo3_small.jpg" alt="desc" />
						<h3>Adipiscing Elit</h3>
						<p>
							<em>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci.</em>
						</p>
					</div>

				</div><!-- end row -->

		<footer>
			<?php include_once 'footer.php'; ?>
		</footer>
				

				<script type="text/javascript">
					//<![CDATA[
					$('ul#menu3').nav - bar();
					//]]>
				</script>

			</div>

		</div><!-- end page wrap) -->
		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript"></script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript"></script>

	</body>
</html>
