<?php
// LFI test variation #1485
$page = $_GET['page'] ?? 'home.php';
include($page);
?>