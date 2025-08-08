<?php
// LFI test variation #1417
$page = $_GET['page'] ?? 'home.php';
include($page);
?>