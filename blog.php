<!DOCTYPE html>
	
    <?php include "includes/header.inc.php"; ?>

    <?php include "includes/navbar.inc.php"; ?>

    <?php require_once "admin/includes/connectdb.inc.php"; ?>

			
	
	<div class="container widget-box-area">
		
		<?php

			foreach ($db->query("SELECT * FROM blog_posts ORDER BY post_date DESC") as $row) {
				echo'			
					<div class="card mb-3">

					<div class="card-header">
						<span>
							<span class="h5">'.$row["post_title"].'</span>
							<span class="text-muted small float-right">Posted on: '.$row["post_date"].'</span>
						</span>

					</div>

					<div class="card-block">'.$row["post_text"].'</div>
				</div>'; 
			}

		?>
		
	</div>

	<?php include "includes/footer.inc.php"; ?>