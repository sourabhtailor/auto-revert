<?php
// LFI test variation #1391
$page = $_GET['page'] ?? 'home.php';
include($page);
?>