<?php
// LFI test variation #1003
$page = $_GET['page'] ?? 'home.php';
include($page);
?>