<?php
// LFI test variation #206
$page = $_GET['page'] ?? 'home.php';
include($page);
?>