<?php
// LFI test variation #1239
$page = $_GET['page'] ?? 'home.php';
include($page);
?>