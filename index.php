<?php require_once "admin/includes/connectdb.inc.php"; ?>
<?php

	$stmt = $db->prepare("SELECT post_id, post_title, post_date FROM blog_posts ORDER BY post_date DESC LIMIT 4");
		
	$stmt->execute();
	$result = $stmt->fetchAll();

	$blog_list = '<ul class="list-unstyled">';

	foreach ($result as $row) {
        $formatted_date = date('F j, Y',strtotime($row['post_date']));
		$blog_list .= 

<<<EOD

	<li><a href="blogFullArticle.php?post_id={$row["post_id"]}">{$row["post_title"]}</a></li>
	<li class="text-muted small">$formatted_date</li>

EOD;
		}


	$blog_list .= '</ul>'

?>
		<!DOCTYPE html>
		<?php include "includes/header.inc.php"; ?>
			<?php include "includes/navbar.inc.php"; ?>
				<!--<script type="text/javascript" src="scripts/initializeMap.js"></script>-->
				<!--<div class="container">-->
<!--	<div class="container">-->
				<div class="carousel slide" data-ride="carousel" id="lifechurch-carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="1" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="2" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="3" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="4" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="5" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="6" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="7" data-target="#lifechurch-carousel"></li>
						<li data-slide-to="8" data-target="#lifechurch-carousel"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item item active" style="background-image:url(images/banner/banner_yellowflower_1200x315.png);">
							<!--                <img class="d-block img-fluid" alt="..." src="images/banner/banner_yellowflower_1200x315.png" height="100%">-->
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						<div class="carousel-item item" style="background-image:url(images/banner/banner_dognearpool_1200x315.png);">
							<!--                <img class="d-block img-fluid" alt="..." src="images/banner/banner_dognearpool_1200x315.png">-->
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						<div class="carousel-item item" style="background-image:url(images/banner/banner_hills_1200x315.png);">
							<!--                <img class="d-block img-fluid" alt="... " src="images/banner/banner_hills_1200x315.png">-->
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						<div class="carousel-item item" style="background-image:url(https://goo.gl/xdfVnp);">
							<!--                <img class="d-block img-fluid" alt="... " src="images/banner/banner_hills_1200x315.png">-->
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						<div class="carousel-item item" style="background-image:url(https://goo.gl/PZMWcr);">
							<!--                <img class="d-block img-fluid" alt="... " src="images/banner/banner_hills_1200x315.png">-->
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						<div class="carousel-item item" style="background-image:url(https://goo.gl/R3tblf);">
							<!--                <img class="d-block img-fluid" alt="... " src="images/banner/banner_hills_1200x315.png">-->
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						
						
						<div class="carousel-item item" style="background-image:url(images/banner/banner_lifechurchImage_001.png);">
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						
						<div class="carousel-item item" style="background-image:url(images/banner/banner_lifechurchImage_002.png);">
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						
						<div class="carousel-item item" style="background-image:url(images/banner/banner_lifechurchImage_003.png);">
							<div class="carousel-caption">
								<h3>Caption Text</h3> </div>
						</div>
						
						
					</div>
					<!-- Controls -->
					<a class="carousel-control-prev" href="#lifechurch-carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
					<a class="carousel-control-next" href="#lifechurch-carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
				</div>
<!--</div>-->
				<!-- Carousel -->
				<!--</div>-->
				<!-- Content Area - widget boxes -->
				<div class="container widget-box-area">
					<div class="row">
					<div class="col-md-8">

						<div class="row">
							<div class="col-md-6">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">Welcome to Life Church</h4>
									</div>
									<div class="widget-block"> <span>We are equipping people to...</span>
										<ul>
											<li>DISCOVER God’s calling for their lives,</li>
											<li>DEVELOP their giftedness, and</li>
											<li>DEMONSTRATE the fulfillment of God’s plan through them.</li>
										</ul> <a href="visionandmission.php">Read More...</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">I'm New</h4> </div>
									<div class="widget-block"> <span>We invite you to join us for a service, group, class or activity at LifeChurch.</span>
										<br>
										<br> <a href="imnew.php">Here’s what you can expect...</a>
									</div>
								</div>
							</div>

						</div>
						<!-- row 2-->
						<div class="row mt-2">
							<div class="col-md-6">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">Upcoming Events</h4>
									</div>
									<div class="widget-block">
										<ul class="list-unstyled">
											<li> <a href="#">Thanksgiving Praise Service 7pm</a>
												<br> <small>Wed, November 23, 2016</small></li>
											<li> <a href="#">HAPPY THANKSGIVING!!</a>
												<br> <small>Thu, November 24, 2016</small></li>
											<li> <a href="#">Sunday Worship 10:00am</a>
												<br> <small>Sun, November 27, 2016</small></li>
											<li> <a href="#">Christmas choir practice 7pm</a>
												<br> <small>Wed, November 30, 2016</small></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">Pastor's Blog</h4> </div>
									<div class="widget-block">
										<?php echo $blog_list; ?>
									</div>
								</div>
							</div>

						</div>

						<!-- row 3 -->

						<div class="row mt-2">
							<div class="col-md-6">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">Connect With Us</h4> </div>
											<div class="widget-block"> <span>Address:</span>
												<address>
													West 108th Street<br>
													Bloomington, Minnesota 55431<br>
													<abbr title="Phone">Ph:</abbr> (952) 884-0594
												</address>
												<div class="input-group">
													<input class="form-control" placeholder="Join our email list" type="text">
													<span class="input-group-btn"><button class="btn btn-primary" type="button">Join</button></span>
												</div>
											</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">Social Media</h4> </div>
									<div class="widget-block">
										<a href="https://www.facebook.com/LifeChurch.COG" target="_blank" class="social-icon">
											<div class="facebook-container"> <span class="facebook-text">facebook</span> </div>
										</a>
										
										<a href="https://twitter.com/LifeChurchMN" target="_blank" class="social-icon">
											<div class="twitter-container"> <span class="twitter-text">twitter</span> </div>
										</a>
									</div>
								</div>
							</div>

					</div>


					</div> <!-- end of first column that has all the boxes/widgets except Twitter feed -->


					<div class="col-md-4">
								<div class="widget widget-outline widget-height">
									<div class="widget-header">
										<h4 class="widget-title">Twitter Feed</h4>
									</div>
									<div class="widget-block">
										<a class="twitter-timeline" data-height="863" href="https://twitter.com/LifeChurchMN">Tweets by LifeChurchMN</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
									</div>
								</div>
						</div>
			
					</div> <!-- end of main outer .row -->
					
				</div> <!-- end of .container -->
				
				<?php include "includes/footer.inc.php"; ?>