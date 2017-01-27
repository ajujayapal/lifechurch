<?php require_once "admin/includes/connectdb.inc.php"; 
	
	function myTruncate($string, $limit, $break=".", $pad="...")
	{
		// return with no change if string is shorter than $limit
		if(strlen($string) <= $limit) return $string;

		// is $break present between $limit and the end of the string?
		if(false !== ($breakpoint = strpos($string, $break, $limit))) {
			if($breakpoint < strlen($string) - 1) {
				$string = substr($string, 0, $breakpoint) . $pad;
			}
		}

		return $string;
	}
 

	function getCurrentPage() {
		if(isset($_GET['blog_page'])){
			$blog_page = htmlspecialchars($_GET['blog_page'], ENT_QUOTES, 'UTF-8');
			
			if (! is_int($blog_page)) {
				return 1;
			}			
			
			return $blog_page;
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
		$pagination .= '<ul class="pagination justify-content-center">';
		$pagination	.= '<li class="page-item' . $previousButtonClass . '">';
		$pagination .= '<a class="page-link" href="?blog_page=' . $previousPage . '">Previous</a>';
		$pagination .= '</li>';


		for($i = 1; $i <= $numOfPages; $i++) {
			
			if($i == $currentPage){
				$pagination .= '<li class="page-item active">';
			}
			else {
				$pagination .=	'<li class="page-item">';
			}
			
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
			$truncated_post = myTruncate($row["post_text"], 350, $break=".", $pad=" ...");
			
			$blog_list .=
            
<<<EOD

<div class="card mb-3">

	<div class="card-header">

		<span>
			<span class="h5">{$row["post_title"]}</span>
			<span class="text-muted small float-right">Posted on: {$formatted_date}</span>
		</span>

	</div>

	<div class="card-block blog-cards">{$truncated_post}</div>

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

		<?php echo showPosts($db, 5); ?>
		
    <?php createPagination($number_of_rows, $rows_per_page); ?>
    
	</div>
<?php include "includes/footer.inc.php"; ?>