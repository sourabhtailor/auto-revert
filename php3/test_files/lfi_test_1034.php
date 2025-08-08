<?php
// LFI test variation #1034
$page = $_GET['page'] ?? 'home.php';
include($page);
?>