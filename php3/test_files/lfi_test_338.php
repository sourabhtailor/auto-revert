<?php
// LFI test variation #338
$page = $_GET['page'] ?? 'home.php';
include($page);
?>