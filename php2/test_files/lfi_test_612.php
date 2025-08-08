<?php
// LFI test variation #612
$page = $_GET['page'] ?? 'home.php';
include($page);
?>