<?php
// LFI test variation #438
$page = $_GET['page'] ?? 'home.php';
include($page);
?>