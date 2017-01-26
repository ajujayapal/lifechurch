<!DOCTYPE html>
	
	<?php include "includes/header.inc.php"; ?>
	
	<?php include "includes/navbar.inc.php"; ?>

	<div class="container widget-box-area">
	
	<div class="row">

		<div class="col-md-9"> <!-- outer column with I'm New and Guest Inquiries boxes nested. To make space for side-nav as a separate column -->

		<div class="row">
			
			<div class="col-12">
				<div class="card mb-3">

				<h5 class="card-header">Contact Us</h5>

					<div class="card-block">

						<form>

							<div class="form-group">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="inputFirstName">
							</div>

							<div class="form-group">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName">
							</div>

							<div class="form-group">
								<label for="inputPhoneNumber">Phone Number</label>
								<input type="tel" class="form-control" id="inputPhoneNumber" placeholder="(123) 456-7890">
							</div>

							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail">
							</div>

							<div class="form-group">
								<label for="inputQuestion">Comment or Question</label>
								<textarea class="form-control" id="inputQuestion"rows=5></textarea>
							</div>

							 <button type="submit" class="btn btn-primary">Send</button>

						</form>

					</div>
				</div>
			</div> <!-- end of column for Guest Inquiries form -->
		
		</div> <!-- end row inner -->

		</div> <!-- end of outer column that houses the content-->


		<div class="col-md-3">
			
			<div class="row">
				
				<div class="col-12">
					<div class="widget widget-outline widget-height">
						
						<div class="widget-header">
							<h4 class="widget-title">Social Media</h4>
						</div>
						
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
			
			<div class="row">
				<div class="col-12">
				
					<div class="widget widget-outline widget-height">
						
						<div class="widget-header">
							<h4 class="widget-title">Map</h4>
						</div>
						
						<div class="widget-block">
							<div id="map" style="height:260px;"></div>
							<script src="scripts/initializeMap.js"></script>
							<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV2_GBmLy4CteaIaGv_9-F6w_4NMHSi8I&callback=initMap">
							</script>
						</div>

					</div>
				</div>
			</div>
			
		</div>

	</div>
</div>


	<?php include "includes/footer.inc.php"; ?>