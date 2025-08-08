<?php
// LFI test variation #476
$page = $_GET['page'] ?? 'home.php';
include($page);
?>