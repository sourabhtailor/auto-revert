<?php
// LFI test variation #1423
$page = $_GET['page'] ?? 'home.php';
include($page);
?>