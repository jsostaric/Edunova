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
							<h1 class="heading_supersize" style="margin-bottom:25px"><span class="heading_center_bg">Blog</span></h1>
						</div>
					</div>

				</div><!-- end row -->

				<div class="row">
					<div class="seven columns">

						<div class="blog_post">
							<!-- Begin Blog Post -->
							<div class="heading_dots_grey">
								<h3><span class="heading_bg">Lorem Ipsum</span></h3>
							</div>
							<img src="images/demo2_small.jpg" alt="desc" style="width:100%" />

							<p>
								<em>20th oct 2012 | Posted by: <a href="#">Admin</a> | <a href="#">5 Comments</a></em>
							</p>

							<p>
								Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros. Vestibulum placerat dui sit amet quam. <a href="blog_single.html">Continue Reading &raquo;</a>
							</p>

						</div><!-- END blog post -->

						<div class="blog_post">
							<!-- Begin Blog Post -->
							<div class="heading_dots_grey">
								<h3><span class="heading_bg">Lorem Ipsum</span></h3>
							</div>
							<img src="images/demo3_small.jpg" alt="desc" style="width:100%" />

							<p>
								<em>20th oct 2012 | Posted by: <a href="#">Admin</a> | <a href="#">5 Comments</a></em>
							</p>

							<p>
								Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros. Vestibulum placerat dui sit amet quam. <a href="blog_single.html">Continue Reading &raquo;</a>
							</p>

						</div><!-- END blog post -->

					</div><!-- END row blog -->

					<div class="five columns">
						<div class="heading_dots_grey">
							<h3><span class="heading_bg">Sidebar</span></h3>
						</div>

						<div class="six columns">
							<div class="panel" style="padding:3px"><img src="images/ad1.jpg" style="width:100%" alt="desc" />
							</div>
						</div>
						<div class="six columns">
							<div class="panel" style="padding:3px"><img src="images/ad1.jpg" style="width:100%" alt="desc" />
							</div>
						</div>

						<div class="six columns">
							<div class="panel" style="padding:3px"><img src="images/ad1.jpg" style="width:100%" alt="desc" />
							</div>
						</div>
						<div class="six columns">
							<div class="panel" style="padding:3px"><img src="images/ad1.jpg" style="width:100%" alt="desc" />
							</div>
						</div>

					</div>
				</div>

				<footer>
			<?php include_once 'footer.php'; ?>
		</footer>

			</div><!-- end page wrap) -->
		</div><!-- end page wrap) -->

		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/foundation.min.js" type="text/javascript"></script>
		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js" type="text/javascript"></script>

	</body>
</html>