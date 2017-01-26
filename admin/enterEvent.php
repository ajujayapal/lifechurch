<?php require_once("includes/connectEventDb.inc.php");

	$default_date = date("Y-m-d"); //This is used to set the default Start Date value in html
	
	if(isset($_POST['submit'])){

		$_POST = array_map('stripslashes', $_POST );

		//collect form data
		extract($_POST);

		try {
			$stmt = $db->prepare('INSERT INTO ajujayap_eventcalendar.event_list
			(event_title,
			event_description,
			event_start,
			event_end,
			recurrence_id)
			VALUES
			(:eventTitle,
			:eventDescription,
			:eventStart,
			:eventEnd,
			:recurrenceId
			)');

				$stmt->execute(array(
							':eventTitle' => $eventTitle,
							':eventDescription' => $eventDescription,
							':eventStart' => $startDate . " " . $startTime,
							':eventEnd' => $endDate . " " . $endTime,
							':recurrenceId' => $recurrenceId
				));

				header('Location: ../events_test.php?event_added');
				exit;
		}
		catch(PDOException $e) {
			echo "<!DOCTYPE html>";
			echo $e->getMessage();
		}
	}

	

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

			<form action="" id="oneDayForm" method="post">

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
						<input class="form-control" type="date" id="oneDayEndDate" name="endDate" value=<?php echo $default_date; ?> readonly>
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
				
				<input type="text" class="form-control hidden-xs-up" name="recurrenceId" id="oneDayRecurrenceId" value="0">
				
				<div class="form-group row">
					<div class="col-12">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>

			</form>
		</div>

		<?php include "includes/adminFooter.inc.php"; ?>