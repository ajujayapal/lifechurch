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
		
		$blog_list = '';
		
		foreach ($result as $row)
		{
			//$post_titles .= "<strong>" . $row['post_title'] . "</strong><br>";
            
            $formatted_date = date('F j, Y',strtotime($row['post_date']));
            
            $blog_list .=
            
            <<<EOD

<div class="card mb-3">

	<div class="card-header">

		<span>
			<span class="h5">{$row["post_title"]}</span>
			<span class="text-muted small float-right">Posted on: {$formatted_date}</span>
		</span>

	</div>

	<div class="card-block blog-cards">{$row["post_text"]}</div>

	<div class="card-footer">
		<a class="btn btn-primary" href="blogFullArticle.php?post_id={$row["post_id"]}">Read Full Article</a>
	</div>
</div>

EOD;
		}
		
		return $blog_list;
		
	}
	

	$stmt = $db->prepare("SELECT COUNT(*) FROM blog_posts");
	$stmt->execute();
	$number_of_rows = $stmt->fetchColumn();
	$rows_per_page = 5;
?>   
   
    

<!DOCTYPE html>
<?php include "includes/header.inc.php"; ?>
<?php include "includes/navbar.inc.php"; ?>
	<div class="container widget-box-area">
<!--		<?php //echo $blog_list ?>-->
		<?php echo showPosts($db, 5); ?>
        <?php createPagination($number_of_rows, $rows_per_page); ?>
	</div>
<?php include "includes/footer.inc.php"; ?>