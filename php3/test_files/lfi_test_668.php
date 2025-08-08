<?php
// LFI test variation #668
$page = $_GET['page'] ?? 'home.php';
include($page);
?>