<?php
// LFI test variation #1249
$page = $_GET['page'] ?? 'home.php';
include($page);
?>