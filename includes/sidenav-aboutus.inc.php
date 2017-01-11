
<?php 

//code to get the current filename (pagename) and display related "title" and "description"

$page = $_SERVER['PHP_SELF']; //Gets the current filename (pagename)

$arr_filename = explode('?', basename($page)); //Splits the page name into an array. the first element in the array will be the file name ("explode" is used in case there is a query string after the filename OR if the file name is in a subfolder)

$filename = $arr_filename[0]; //first element in the array is the filename

 ?>


<div class="widget-box">
	<div class="lead">
		<strong>About Us</strong>
	</div>

	<nav class="nav nav-pills nav-stacked">
		<a class="nav-link <?php if($filename == 'locationandtimes.php') {echo 'active';} ?>" href="locationandtimes.php">Location & Times</a>
		<a class="nav-link <?php if($filename == 'imnew.php') {echo 'active';}?>" href="imnew.php">I'm New</a>
		<a class="nav-link <?php if($filename == 'visionandmission.php') {echo 'active';}?>" href="visionandmission.php">Vision & Mission</a>
		<a class="nav-link <?php if($filename == 'staff.php') {echo 'active';}?>" href="staff.php">Staff</a>
	</nav>

</div>