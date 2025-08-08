<?php
// LFI test variation #190
$page = $_GET['page'] ?? 'home.php';
include($page);
?>