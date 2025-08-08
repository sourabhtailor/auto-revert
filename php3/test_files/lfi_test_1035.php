<?php
// LFI test variation #1035
$page = $_GET['page'] ?? 'home.php';
include($page);
?>