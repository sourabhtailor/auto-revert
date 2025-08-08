<?php
// LFI test variation #179
$page = $_GET['page'] ?? 'home.php';
include($page);
?>