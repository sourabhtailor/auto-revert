<?php
// LFI test variation #1444
$page = $_GET['page'] ?? 'home.php';
include($page);
?>