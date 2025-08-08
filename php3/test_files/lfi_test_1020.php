<?php
// LFI test variation #1020
$page = $_GET['page'] ?? 'home.php';
include($page);
?>