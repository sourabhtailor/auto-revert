<?php
// LFI test variation #1
$page = $_GET['page'] ?? 'home.php';
include($page);
?>