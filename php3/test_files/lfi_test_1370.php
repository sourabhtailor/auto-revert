<?php
// LFI test variation #1370
$page = $_GET['page'] ?? 'home.php';
include($page);
?>