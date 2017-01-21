<?php require_once "admin/includes/connectdb.inc.php"; ?>

<?php
    $stmt = $db->query('SELECT post_title FROM blog_posts');
    
    $post_titles = '';

    while ($row = $stmt->fetch())
    {
        $post_titles .= "<strong>" . $row['post_title'] . "</strong><br>";
    }


?>

<!DOCTYPE html>
	
	<?php include "includes/header.inc.php"; ?>
	
	<?php include "includes/navbar.inc.php"; ?>

    <div class="container">
   
        <?php echo $post_titles; ?>
    
    </div>
    

	<?php include "includes/footer.inc.php"; ?>