<?php require_once "admin/includes/connectdb.inc.php"; ?>

<?php
	
	function getCurrentPage() {
		if(isset($_GET['blog_page'])){
			return $_GET['blog_page'];
		}

		else {
			return 1;
		}
	}


	function createPagination($numRows, $rowsPerPage) {
		
		$currentPage = getCurrentPage();
		
		
		$numOfPages = ceil($numRows/$rowsPerPage);
		
		$previousButtonClass = "";
		$nextButtonClass = "";
		
		if ($currentPage <= 1) {
			$previousPage = "#";
			$previousButtonClass = " disabled";
		}
		else {
			$previousPage = $currentPage - 1;
		}
		
		if ($currentPage >= $numOfPages) {
			$nextPage = "#";
			$nextButtonClass = " disabled";
		}
		else {
			$nextPage = $currentPage + 1;
		}
		
				
		$pagination = '<nav aria-label="Blog Page Navigation" class="mt-3">';
		$pagination .= '<ul class="pagination">';
		$pagination	.= '<li class="page-item' . $previousButtonClass . '">';
		$pagination .= '<a class="page-link" href="?blog_page=' . $previousPage . '">Previous</a>';
		$pagination .= '</li>';


		for($i = 1; $i <= $numOfPages; $i++) {
			$pagination .=	'<li class="page-item">';
			$pagination .= '<a class="page-link" href="?blog_page=' . $i . '">'. $i . '</a>';
			$pagination .= '</li>';

		}
		
	$pagination .= '<li class="page-item' . $nextButtonClass . '">';
	$pagination .= '<a class="page-link" href="?blog_page=' . $nextPage . '">Next</a>';
	$pagination .= '</li>';
  $pagination .= '</ul>';
	$pagination .= '</nav>';
	
	echo $pagination;
	}

	function showPosts($dbConnection, $postsPerPage) {
		
		$currentPage = getCurrentPage();
		
		$postOffset = $postsPerPage * ($currentPage - 1);
		
		$stmt = $dbConnection->prepare("SELECT * FROM blog_posts ORDER BY post_date DESC LIMIT " . $postsPerPage . " OFFSET " . $postOffset);
		
		$stmt->execute();
		
		$result = $stmt->fetchAll();
		
		$post_titles = '';
		
		foreach ($result as $row)
		{
			$post_titles .= "<strong>" . $row['post_title'] . "</strong><br>";
		}
		
		return $post_titles;
		
	}
	

	$stmt = $db->prepare("SELECT COUNT(*) FROM blog_posts");
	$stmt->execute();
	$number_of_rows = $stmt->fetchColumn();
	$rows_per_page = 5;
	
	/*$stmt = $db->prepare("SELECT * FROM blog_posts ORDER BY post_date DESC LIMIT 5 OFFSET 5");
  $stmt->execute();
	$result = $stmt->fetchAll();
	
  $post_titles = '';

  foreach ($result as $row)
  {
  	$post_titles .= "<strong>" . $row['post_title'] . "</strong><br>";
  }*/


?>

<!DOCTYPE html>
	
	<?php include "includes/header.inc.php"; ?>
	
	<?php include "includes/navbar.inc.php"; ?>

    <div class="container">
   
        <?php echo showPosts($db, 5); ?>
        <?php createPagination($number_of_rows, $rows_per_page); ?>

        
    </div>
    

	<?php include "includes/footer.inc.php"; ?>