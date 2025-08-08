<?php
// LFI test variation #1090
$page = $_GET['page'] ?? 'home.php';
include($page);
?>