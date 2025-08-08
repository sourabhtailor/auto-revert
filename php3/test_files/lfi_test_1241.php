<?php
// LFI test variation #1241
$page = $_GET['page'] ?? 'home.php';
include($page);
?>