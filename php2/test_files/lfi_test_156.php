<?php
// LFI test variation #156
$page = $_GET['page'] ?? 'home.php';
include($page);
?>