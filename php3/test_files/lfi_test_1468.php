<?php
// LFI test variation #1468
$page = $_GET['page'] ?? 'home.php';
include($page);
?>