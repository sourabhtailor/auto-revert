<?php
// LFI test variation #1440
$page = $_GET['page'] ?? 'home.php';
include($page);
?>