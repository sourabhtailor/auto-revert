<?php
// LFI test variation #1475
$page = $_GET['page'] ?? 'home.php';
include($page);
?>