<?php
// LFI test variation #1084
$page = $_GET['page'] ?? 'home.php';
include($page);
?>