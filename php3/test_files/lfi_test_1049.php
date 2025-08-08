<?php
// LFI test variation #1049
$page = $_GET['page'] ?? 'home.php';
include($page);
?>