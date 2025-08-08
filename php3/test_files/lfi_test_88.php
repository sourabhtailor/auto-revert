<?php
// LFI test variation #88
$page = $_GET['page'] ?? 'home.php';
include($page);
?>