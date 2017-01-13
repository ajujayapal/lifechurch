

<?php 

//code to get the current filename (pagename) and display related "title" and "description"

$page = $_SERVER['PHP_SELF']; //Gets the current filename (pagename)

$arr_filename = explode('?', basename($page)); //Splits the page name into an array. the first element in the array will be the file name ("explode" is used in case there is a query string after the filename OR if the file name is in a subfolder)

$filename = $arr_filename[0]; //first element in the array is the filename

 ?>


<div class="widget widget-outline">
	<div class="widget-header mb-2">
		<strong>Our Ministries</strong>
	</div>

	<nav class="nav nav-pills flex-column">
		<a class="nav-link <?php if($filename == 'adults.php') {echo 'active';} ?>" href="adults.php">Adults</a>
		<a class="nav-link <?php if($filename == 'teenministries.php') {echo 'active';} ?>" href="teenministries.php">Teen Ministries & Activities</a>
		<a class="nav-link <?php if($filename == 'childrenandnursery.php') {echo 'active';} ?>" href="childrenandnursery.php">Children & Nursery</a>
		<a class="nav-link <?php if($filename == 'outreachandmissions.php') {echo 'active';} ?>" href="outreachandmissions.php">Outreach & Missions</a>
		<a class="nav-link <?php if($filename == 'lifeacademy.php') {echo 'active';} ?>" href="lifeacademy.php">Life Academy</a>
		<a class="nav-link <?php if($filename == 'summerlifedaycamp.php') {echo 'active';} ?>" href="summerlifedaycamp.php">Summerlife Day Camp</a>
	</nav>

</div>
