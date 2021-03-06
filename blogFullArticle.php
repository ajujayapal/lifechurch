<?php require_once "admin/includes/connectdb.inc.php"; ?>
<?php
		
	if(isset($_GET['post_id']))
	{

		//echo $_GET['post_id'];

		$stmt = $db->prepare("SELECT * FROM blog_posts WHERE post_id = ?");
		$stmt->execute(array($_GET['post_id']));
		$row_count = $stmt->rowCount();

		if($row_count == 1)
		{
			$row = $stmt->fetch();
            $formatted_date = date('F j, Y',strtotime($row['post_date']));
			$blog_post = 
<<<EOD
	<div class="card mb-3">

	<span class="card-header">
		<h5>{$row["post_title"]}</h5><span class="text-muted small float-right">$formatted_date</span>
	</span>

	<div class="card-block">
		{$row["post_text"]}
	</div>

	</div>

EOD;

		}
					
		else {

			$message = "<p>Please access the Blogs page and click any blog title to read full article.</p>";

			$blog_post = $message;

		}

	}

	else
	{
		$message = "<p>Please access the Blogs page and click any blog title to read full article.</p>";

		$blog_post = $message;
	}

	
	
?>



<!DOCTYPE html>
<?php include "includes/header.inc.php"; ?>
<?php include "includes/navbar.inc.php"; ?>

<div class="container widget-box-area">
	<?php echo $blog_post; ?>
</div>
<?php include "includes/footer.inc.php"; ?>