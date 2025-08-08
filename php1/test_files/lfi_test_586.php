<?php
// LFI test variation #586
$page = $_GET['page'] ?? 'home.php';
include($page);
?>