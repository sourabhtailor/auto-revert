<?php
// LFI test variation #268
$page = $_GET['page'] ?? 'home.php';
include($page);
?>