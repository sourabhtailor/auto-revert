<?php
// LFI test variation #1442
$page = $_GET['page'] ?? 'home.php';
include($page);
?>