<?php
// LFI test variation #1305
$page = $_GET['page'] ?? 'home.php';
include($page);
?>