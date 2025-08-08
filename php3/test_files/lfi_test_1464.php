<?php
// LFI test variation #1464
$page = $_GET['page'] ?? 'home.php';
include($page);
?>