<?php
// LFI test variation #693
$page = $_GET['page'] ?? 'home.php';
include($page);
?>