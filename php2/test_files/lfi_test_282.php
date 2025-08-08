<?php
// LFI test variation #282
$page = $_GET['page'] ?? 'home.php';
include($page);
?>