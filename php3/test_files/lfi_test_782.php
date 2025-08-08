<?php
// LFI test variation #782
$page = $_GET['page'] ?? 'home.php';
include($page);
?>