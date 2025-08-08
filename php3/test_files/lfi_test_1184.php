<?php
// LFI test variation #1184
$page = $_GET['page'] ?? 'home.php';
include($page);
?>