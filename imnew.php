<!DOCTYPE html>
	
	<?php include "includes/header.inc.php"; ?>
	
	<?php include "includes/navbar.inc.php"; ?>



<div class="container widget-box-area">
	
	<div class="row">

		<div class="col-md-9"> <!-- outer column with I'm New and Guest Inquiries boxes nested. To make space for side-nav as a separate column -->

		<div class="row">
			<div class="col-lg-4">
				<div class="card mb-3">

					<h5 class="card-header">I'm New</h5>
					
					<div class="card-block">

						We invite you to join us for a service, group, class or activity at LifeChurch.
						Here’s what you can expect...
						<ul>
							<br>
							<li>A warm welcome and someone to show you where to go</li>
							<li>Casual dress or your Sunday best – everyone is welcome</li>
							<li>A Spirit-filled worship experience</li>
							<li>Thought-provoking messages based on the Bible</li>
							<li>Live worship music</li>
							<li>Nursery ministry for the little ones</li>
							<li>Fun teaching for your kids & teens</li>
							<li>Numerous opportunities to serve and minister</li>
							<li>Coffee Café: Open before and after service – spend time with friends, and make some new friends!</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="card mb-3">

				<h6 class="card-header">Guest Inquiries & Prayer Requests</h5>

					<div class="card-block">

						<form>

							<div class="form-group">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
							</div>

							<div class="form-group">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
							</div>

							<div class="form-group">
								<label for="inputPhoneNumber">Phone Number</label>
								<input type="tel" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
							</div>

							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="Email">
							</div>

							<div class="form-group">
								<label for="inputInquiry">Inquiry or Prayer Requests</label>
								<textarea class="form-control" id="inputInquiry" placeholder="Inquiry or Prayer Requests" rows=5></textarea>
							</div>

							 <button type="submit" class="btn btn-primary">Send</button>

						</form>

					</div>
				</div>
			</div> <!-- end of column for Guest Inquiries form -->
		
		</div> <!-- end row inner -->

		</div> <!-- end of outer column that houses the content-->


		<div class="col-md-3">
			<?php include "includes/sidenav-aboutus.inc.php" ?>
		</div>

	</div>
</div>


	<?php include "includes/footer.inc.php"; ?>