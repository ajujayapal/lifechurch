<?php require_once("includes/connectEventDb.inc.php");

	$default_date = date("Y-m-d"); 

?>
	<!DOCTYPE html>
	<?php include "includes/adminHeader.inc.php"; ?>

		<div class="container">

			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="eventFormType" id="showOneDayForm" value="oneDay" checked> 1-Day Event </label>
			</div>

			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="eventFormType" id="showRecurringForm" value="recur"> Recurring Event </label>
			</div>

			<form action="oneDayEvent" id="oneDayForm">

				<div class="form-group row">

					<label for="oneDayStartDate" class="col-2 col-form-label">Start Date</label>
					<div class="col-4">
						<input class="form-control" type="date" id="oneDayStartDate" name="startDate" value=<?php echo $default_date; ?>>
					</div>

					<label for="oneDayStartTime" class="col-2 col-form-label">Start Time</label>
					<div class="col-4">
						<input class="form-control" type="time" id="oneDayStartTime" name="startTime" value="14:00:00">
					</div>

				</div>

				<div class="form-group row">

					<label for="oneDayEndDate" class="col-2 col-form-label">End Date</label>

					<div class="col-4">
						<input class="form-control" type="date" id="oneDayEndDate" name="endDate"  value=<?php echo $default_date; ?> disabled>
					</div>

					<label for="oneDayEndTime" class="col-2 col-form-label">End Time</label>
					<div class="col-4">
						<input class="form-control" type="time" id="oneDayEndTime" name="endTime">
					</div>

				</div>

				<div class="form-group row">
					<label for="eventTitle" class="col-2 col-form-label">Event Title</label>
					<div class="col-10">
						<input class="form-control" type="text" id="eventTitle" name="eventTitle">
					</div>
				</div>

				<div class="form-group row">
					<label for="eventDescription" class="col-2 col-form-label">Event Description</label>
					<div class="col-10">
						<textarea class="form-control" id="eventDescription" name="eventDescription" rows="15"></textarea>
					</div>
				</div>
				
				<div class="form-group row">
					<div class="col-12">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>

			</form>
		</div>

		<?php include "includes/adminFooter.inc.php"; ?>