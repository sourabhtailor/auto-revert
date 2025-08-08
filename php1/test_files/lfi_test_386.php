<?php
// LFI test variation #386
$page = $_GET['page'] ?? 'home.php';
include($page);
?>