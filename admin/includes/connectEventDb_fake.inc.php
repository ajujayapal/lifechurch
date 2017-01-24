<?php

$db = new PDO("mysql:host=localhost;dbname=fake;charset=utf8mb4", 'fake', 'fake');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*$db->setAttribute(PDO::ATT_EMULATE_PREPARES, false);*/


?>