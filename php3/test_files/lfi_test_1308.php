<?php
// LFI test variation #1308
$page = $_GET['page'] ?? 'home.php';
include($page);
?>