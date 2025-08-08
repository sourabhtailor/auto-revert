<?php
// LFI test variation #924
$page = $_GET['page'] ?? 'home.php';
include($page);
?>