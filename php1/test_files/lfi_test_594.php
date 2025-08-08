<?php
// LFI test variation #594
$page = $_GET['page'] ?? 'home.php';
include($page);
?>