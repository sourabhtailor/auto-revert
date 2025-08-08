<?php
// LFI test variation #1200
$page = $_GET['page'] ?? 'home.php';
include($page);
?>