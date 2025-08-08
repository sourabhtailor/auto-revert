<?php
// LFI test variation #1456
$page = $_GET['page'] ?? 'home.php';
include($page);
?>