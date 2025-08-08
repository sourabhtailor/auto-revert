<?php
// LFI test variation #1205
$page = $_GET['page'] ?? 'home.php';
include($page);
?>