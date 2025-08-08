<?php
// LFI test variation #1099
$page = $_GET['page'] ?? 'home.php';
include($page);
?>