<?php
// LFI test variation #564
$page = $_GET['page'] ?? 'home.php';
include($page);
?>