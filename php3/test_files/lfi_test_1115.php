<?php
// LFI test variation #1115
$page = $_GET['page'] ?? 'home.php';
include($page);
?>