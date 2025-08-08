<?php
// LFI test variation #1280
$page = $_GET['page'] ?? 'home.php';
include($page);
?>