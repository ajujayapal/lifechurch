
<?php 

//code to get the current filename (pagename) and display related "title" and "description"

$page = $_SERVER['PHP_SELF']; //Gets the current filename (pagename)

$arr_filename = explode('?', basename($page)); //Splits the page name into an array. the first element in the array will be the file name ("explode" is used in case there is a query string after the filename OR if the file name is in a subfolder)

$filename = $arr_filename[0]; //first element in the array is the filename


switch ($filename){

case 'adults.php':
 $title= 'Life Church, Church of God, Bloomington MN - Ministry - Adult Ministry';
 $description = 'about description here';
 break;

case 'blog.php':
 $title= 'Life Church, Church of God, Bloomington MN - Pastor\'s Blog';
 $description = 'about description here';
 break;

case 'childrenandnursery.php':
 $title= 'Life Church, Church of God, Bloomington MN - Ministry - Children and Nursery';
 $description = 'about description here';
 break;

case 'contactus.php':
 $title= 'Life Church, Church of God, Bloomington MN - Contact Us';
 $description = 'about description here';
 break;

case 'events.php':
 $title= 'Life Church, Church of God, Bloomington MN - Event Calendar - Family Friendly Events';
 $description = 'about description here';
 break;

case 'give.php':
 $title= 'Life Church, Church of God, Bloomington MN - Give, Donate, Help Support Missions and Community';
 $description = 'about description here';
 break;

case 'imnew.php':
 $title= 'Life Church, Church of God, Bloomington MN - I\'m New - What to Expect';
 $description = 'about description here';
 break;

case 'index.php':
 $title= 'Life Church, Church of God, Bloomington MN - Homepage';
 $description = 'Life Church Homepage. Life Church is a part of Church of God. Pentacostal Church in Bloomington MN.';
 break;

 case 'lifeacademy.php':
 $title= 'Life Church, Church of God, Bloomington MN - Life Academy School';
 $description = 'about description here';
 break;

case 'locationandtimes.php':
 $title= 'Life Church, Church of God, Bloomington MN - Location - Map - Directions';
 $description = 'about description here';
 break;

case 'media.php':
 $title= 'Life Church, Church of God, Bloomington MN - Audio and video of Sermons and Church Activities';
 $description = 'about description here';
 break;

case 'outreachandmissions.php':
 $title= 'Life Church, Church of God, Bloomington MN - Outreach and Missions - Spread the Gospel';
 $description = 'about description here';
 break;

case 'staff.php':
 $title= 'Life Church, Church of God, Bloomington MN - Staff - Worship Leaders - Prayer Warriors';
 $description = 'about description here';
 break;

case 'summerlifedaycamp.php':
 $title= 'Life Church, Church of God, Bloomington MN - Ministry - Summer Life Day Camp for Children';
 $description = 'about description here';
 break;

case 'teenministries.php':
 $title= 'Life Church, Church of God, Bloomington MN - Ministry - Teen Ministries';
 $description = 'about description here';
 break;

case 'visionandmission.php':
 $title= 'Life Church, Church of God, Bloomington MN - Vision and Mission - Who we are - About Us - Our Motto';
 $description = 'about description here';
 break;


default:
 $title = 'Life Church, Church of God, Bloomington MN';
}
 ?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<!-- <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>

	<div class="page-header">
		<h1>Life Church<small>, Bloomington</small></h1>
	</div>