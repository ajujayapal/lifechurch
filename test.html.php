<?php
	
	if(isset($_POST['submit'])){

			$_POST = array_map('stripslashes', $_POST );

			//collect form data
			extract($_POST);
		
			$startDate_mysql = $startDate . " " . $startTime; 
		
			echo $startDate_mysql;
		
	}

?>


<!DOCTYPE html>
	
	<?php include "includes/header.inc.php"; ?>
	
	<?php include "includes/navbar.inc.php"; ?>

	<div class="container widget-box-area">
		<form action="" method="post">
		
			<div class="form-group row">
				<label for="startDate" class="col-2 col-form-label">Start Date</label>
				<div class="col-4">
					<input class="form-control" type="date" id="startDate" name="startDate">
				</div>

				<label for="startTime" class="col-2 col-form-label">Start Time</label>
				<div class="col-4">
					<input class="form-control" type="time" id="startTime" name="startTime">
				</div>

			</div>
			
			<div class="form-group row">
            <div class="col-md-8">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
		</div>
		
	</form>
	</div>

	<?php include "includes/footer.inc.php"; ?>