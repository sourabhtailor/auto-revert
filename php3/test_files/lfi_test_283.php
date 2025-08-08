<?php
// LFI test variation #283
$page = $_GET['page'] ?? 'home.php';
include($page);
?>