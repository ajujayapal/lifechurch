<?php require_once "admin/includes/connectdb.inc.php"; 

$stmt = $db->prepare("SELECT * FROM event_list");
$stmt->execute();
$result = $stmt->fetchAll();

$event_list_header = '<div class="list-group">';
$event_list_items = "";
$event_list_footer = "</div>";

foreach($result as $row) {
	

	$event_list_items .= <<<EOD
	
	<div class="list-group-item flex-column align-items-start">
			<p><strong>Event Id: </strong><span>{$row["event_id"]}</span></p>
			<p><strong>Event Title:  </strong><span>{$row["event_title"]}</span></p>
			<p><strong>Start Time:  </strong><span>{$row["event_start"]}</span></p>
			<p><strong>End Time:  </strong><span>{$row["event_end"]}</span></p>
			<p><strong>Event Description:  </strong></p>
			<p>{$row["event_description"]}</p>
		</div>
EOD;

}

?>


<!DOCTYPE html>
	
<?php include "includes/header.inc.php"; ?>

<?php include "includes/navbar.inc.php"; ?>

<div class="container widget-box-area">
	

	<?php echo $event_list_items; ?>

	
</div>


<?php include "includes/footer.inc.php"; ?>