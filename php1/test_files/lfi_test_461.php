<?php
// LFI test variation #461
$page = $_GET['page'] ?? 'home.php';
include($page);
?>