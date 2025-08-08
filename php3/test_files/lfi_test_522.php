<?php
// LFI test variation #522
$page = $_GET['page'] ?? 'home.php';
include($page);
?>