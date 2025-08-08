<?php
// LFI test variation #1433
$page = $_GET['page'] ?? 'home.php';
include($page);
?>