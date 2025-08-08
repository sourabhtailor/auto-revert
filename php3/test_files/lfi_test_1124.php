<?php
// LFI test variation #1124
$page = $_GET['page'] ?? 'home.php';
include($page);
?>