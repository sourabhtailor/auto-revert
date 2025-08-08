<?php
// LFI test variation #1130
$page = $_GET['page'] ?? 'home.php';
include($page);
?>