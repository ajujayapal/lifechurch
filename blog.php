<!DOCTYPE html>
	
    <?php include "includes/header.inc.php"; ?>

    <?php include "includes/navbar.inc.php"; ?>

    <?php require_once "admin/includes/connectdb.inc.php"; ?>

		<?php

			$blog_list = '';

			foreach ($db->query("SELECT * FROM blog_posts ORDER BY post_date DESC") as $row) {
				
				$blog_list .= 
					
<<<EOD

	<div class="card mb-3">

		<div class="card-header">

			<span>
				<span class="h5">{$row["post_title"]}</span>
				<span class="text-muted small float-right">Posted on:{$row["post_date"]}</span>
			</span>

		</div>

		<div class="card-block">{$row["post_text"]}</div>

	</div>
	
EOD;
				
			}

		?>
			
	
	<div class="container widget-box-area">
		
			<?php echo $blog_list ?>
		
	</div>

	<?php include "includes/footer.inc.php"; ?>