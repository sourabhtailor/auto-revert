<?php
// LFI test variation #917
$page = $_GET['page'] ?? 'home.php';
include($page);
?>