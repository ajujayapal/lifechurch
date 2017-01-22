<?php

$db = new PDO("mysql:host=localhost;dbname=fake_db;charset=utf8mb4", 'fake_username', 'fake_password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*$db->setAttribute(PDO::ATT_EMULATE_PREPARES, false);*/


?>