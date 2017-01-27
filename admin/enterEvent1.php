<?php require_once "includes/connectdb.inc.php";

	$default_date = date("Y-m-d"); 


	//if form has been submitted process it
	if(isset($_POST['submit'])){

			$_POST = array_map('stripslashes', $_POST );

			//collect form data
			extract($_POST);

			//very basic validation
			if($startDate ==''){
					$error[] = 'Please enter the Start Date.';
			}

			if($startTime ==''){
					$error[] = 'Please enter the Start Time.';
			}
		
		if($endTime ==''){
					$error[] = 'Please enter the Start Time.';
			}
		
		if($eventTitle ==''){
					$error[] = 'Please enter the Event Title.';
			}

			if(!isset($error)){

					try {

							//insert into database
							$stmt = $db->prepare('INSERT INTO ajujayap_eventcalendar.event_list
											(event_title,
											event_description,
											event_start,
											recurrence_count,
											period_frequency,
											period_type_id,
											event_end)
											VALUES
											(:eventTitle,
											:eventDescription,
											:eventStart,
											:recurrenceCount,
											:periodFrequency,
											:periodTypeId,
											:eventEnd)');
						
						$stmt->execute(array(
									':eventTitle' => $eventTitle,
									':eventDescription' => $eventDescription,
									':eventStart' => $startDate . " " . $startTime,
									':recurrenceCount' => $recurrenceCount,
									':periodFrequency' => $periodFrequency,
									':periodTypeId' => $periodTypeId,
									':eventEnd' => $endDate . " " . $endTime
						));
						
							/*$stmt = $db->prepare('INSERT INTO blog_posts (post_title,post_text,post_date) VALUES (:postTitle, :postText, :postDate)') ;
							$stmt->execute(array(
									':postTitle' => $postTitle,
									':postText' => $postText,
									':postDate' => date('Y-m-d H:i:s')
							));*/

							//redirect to blogs page
							header('Location: ../events.php?event_added');
							exit;

					} catch(PDOException $e) {
              echo "<!DOCTYPE html>";
							echo $e->getMessage();
					}

			}

	}

	//check for any errors
	if(isset($error)){
			foreach($error as $error){
					echo '<p class="error">'.$error.'</p>';
			}
	}
	?>

<!DOCTYPE html>

<?php include "includes/adminHeader.inc.php"; ?>

	
<div class="container">

	<form action="" method="post">
		
		<div class="form-group row">
			<label for="startDate" class="col-2 col-form-label">Start Date</label>
			<div class="col-4">
				<input class="form-control" type="date" id="startDate" name="startDate" value=<?php echo $default_date; ?>>
			</div>
			
			<label for="startTime" class="col-2 col-form-label">Start Time</label>
			<div class="col-4">
				<input class="form-control" type="time" id="startTime" name="startTime" value="14:00:00">
			</div>
			
		</div>
		
		
		<div class="form-group row">
			<label for="recurrenceCount" class="col-2 col-form-label"># of Recurrences</label>
			<div class="col-2">
				<input class="form-control" type="number" id="recurrenceCount" name="recurrenceCount">
			</div>
			
			<label for="periodFrequency" class="col-2 col-form-label">Period Frequency</label>
			<div class="col-2">
				<input class="form-control" type="number" id="periodFrequency" name="periodFrequency">
			</div>
			
			<label for="periodTypeId" class="col-2 col-form-label">Period Type</label>
			<div class="col-2">
<!--				<input class="form-control" type="text" id="periodTypeId" name="periodTypeId">-->
				<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="periodTypeId" name="periodTypeId">
					<option selected value="1">daily</option>
					<option value="2">weekly</option>
					<option value="3">monthly</option>
  			</select>
			</div>
			
		</div>
		
		
		<div class="form-group row">
			<label for="endDate" class="col-2 col-form-label">End Date</label>
			<div class="col-4">
				<input class="form-control" type="date" id="endDate" name="endDate">
			</div>
			
			<label for="endTime" class="col-2 col-form-label">End Time</label>
			<div class="col-4">
				<input class="form-control" type="time" id="endTime" name="endTime">
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
            <div class="col-md-8">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
		</div>
		
		
	</form>
</div>




<?php include "includes/adminFooter.inc.php"; ?>