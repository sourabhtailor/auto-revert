<?php
// LFI test variation #1059
$page = $_GET['page'] ?? 'home.php';
include($page);
?>