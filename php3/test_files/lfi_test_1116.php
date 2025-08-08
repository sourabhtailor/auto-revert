<?php
// LFI test variation #1116
$page = $_GET['page'] ?? 'home.php';
include($page);
?>