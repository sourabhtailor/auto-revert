<?php
// LFI test variation #874
$page = $_GET['page'] ?? 'home.php';
include($page);
?>