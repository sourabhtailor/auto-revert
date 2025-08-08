<?php
// LFI test variation #1291
$page = $_GET['page'] ?? 'home.php';
include($page);
?>