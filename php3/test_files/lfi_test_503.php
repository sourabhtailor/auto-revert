<?php
// LFI test variation #503
$page = $_GET['page'] ?? 'home.php';
include($page);
?>