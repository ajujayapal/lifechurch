<?php require_once "includes/connectdb.inc.php";?>

<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

			$_POST = array_map('stripslashes', $_POST );

			//collect form data
			extract($_POST);

			//very basic validation
			if($postTitle ==''){
					$error[] = 'Please enter the Post Title.';
			}

			if($postText ==''){
					$error[] = 'Please enter the Post Text.';
			}

			if(!isset($error)){

					try {

							//insert into database
							$stmt = $db->prepare('INSERT INTO blog_posts (post_title,post_text,post_date) VALUES (:postTitle, :postText, :postDate)') ;
							$stmt->execute(array(
									':postTitle' => $postTitle,
									':postText' => $postText,
									':postDate' => date('Y-m-d H:i:s')
							));

							//redirect to blogs page
							header('Location: ../blog.php?post_added');
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
			<label for="postTitle" class="col-2 col-form-label">Blog Post Title</label>
			<div class="col-10">
				<input class="form-control" type="text" id="postTitle" name="postTitle">
			</div>
		</div>

		<div class="form-group row">
			<label for="postText" class="col-2 col-form-label">Blog Post Text</label>
			<div class="col-10">
				<textarea class="form-control" id="postText" name="postText" rows="15"></textarea>
			</div>
		</div>
		
		<div class="form-group row">
      <div class="offset-sm-2 col-md-2">
        <button type="button" class="btn btn-primary">Preview</button>
      </div>

      <div class="col-md-8">
        <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
      </div>
		</div>
		
		
	</form>
</div>




<?php include "includes/adminFooter.inc.php"; ?>