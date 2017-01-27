<?php
require_once("includes/connectdb.inc.php");

$default_date = date("Y-m-d"); //This is used to set the default Start Date value in html

$root_folder = $_SERVER['DOCUMENT_ROOT'];

if (isset($_POST["submit"])) {
	$_POST = array_map('stripslashes', $_POST );
	
	//collect form data
	extract($_POST);

	
	$upload_dir = "C:/Users/aju.jayapalan2/Pictures/";
	$upload_file = $upload_dir . basename($_FILES['imageBrowse']['name']);

	$saved_name = "carouselImage_" . time();
	
	echo '<pre>';
	

	echo $upload_file;
	
	if (move_uploaded_file($_FILES['imageBrowse']['tmp_name'], $upload_file)) {
			echo "File is valid, and was successfully uploaded.\n";
	} else {
			echo "Possible file upload attack!\n";
	}

	echo 'Here is some more debugging info:';
	print_r($_FILES);

	print "</pre>";
	
	
	
	
	$display = '<pre>';
	$display .= $_FILES['imageBrowse']['name'] . '<br>';
	$display .= $_FILES['imageBrowse']['type'] . '<br>';
	$display .= $_FILES['imageBrowse']['size'] . '<br>';
	$display .= $_FILES['imageBrowse']['tmp_name'] . '<br>';
	$display .= $_FILES['imageBrowse']['error'] . '<br>';
	
	$display .= "</pre>";
	
	echo $display;
}

?>

<!DOCTYPE html>
	<?php include "includes/adminHeader.inc.php"; ?>

		<div class="container">

			<form enctype="multipart/form-data" action="" id="homepageCarousel" method="post">

				<div class="form-group row">

					<label for="imageStartDate" class="col-2 col-form-label">Start Date</label>
					<div class="col-4">
						<input class="form-control" type="date" id="imageStartDate" name="imageStartDate" value=<?php echo $default_date; ?>>
					</div>

					<label for="imageStartTime" class="col-2 col-form-label">Start Time</label>
					<div class="col-4">
						<input class="form-control" type="time" id="imageStartTime" name="imageStartTime" value="14:00:00">
					</div>

				</div>

				<div class="form-group row">

					<label for="imageEndDate" class="col-2 col-form-label">End Date</label>

					<div class="col-4">
						<input class="form-control" type="date" id="v" name="imageEndDate" value=<?php echo $default_date; ?>>
					</div>

					<label for="imageEndTime" class="col-2 col-form-label">End Time</label>
					<div class="col-4">
						<input class="form-control" type="time" id="imageEndTime" name="imageEndTime">
					</div>

				</div>
				
				
				<input name="MAX_FILE_SIZE" value="30000" hidden/>
				

				<div class="form-group row">
					<label for="imageBrowse" class="col-2 col-form-label">Browse</label>
					<div class="col-10">
						<input class="form-control" type="file" id="imageBrowse" name="imageBrowse">
					</div>
				</div>
				
				<div id="filename"></div>
							
				<div class="form-group row">
					<div class="col-12">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>

			</form>
		</div>
		
				
		<?php include "includes/adminFooter.inc.php"; ?>