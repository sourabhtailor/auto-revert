<?php
// LFI test variation #1025
$page = $_GET['page'] ?? 'home.php';
include($page);
?>