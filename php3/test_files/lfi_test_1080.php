<?php
// LFI test variation #1080
$page = $_GET['page'] ?? 'home.php';
include($page);
?>