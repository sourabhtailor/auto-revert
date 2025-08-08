<?php
// LFI test variation #549
$page = $_GET['page'] ?? 'home.php';
include($page);
?>