<?php
// LFI test variation #1039
$page = $_GET['page'] ?? 'home.php';
include($page);
?>