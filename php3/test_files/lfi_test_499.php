<?php
// LFI test variation #499
$page = $_GET['page'] ?? 'home.php';
include($page);
?>