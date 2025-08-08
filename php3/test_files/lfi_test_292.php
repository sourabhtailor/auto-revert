<?php
// LFI test variation #292
$page = $_GET['page'] ?? 'home.php';
include($page);
?>