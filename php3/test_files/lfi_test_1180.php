<?php
// LFI test variation #1180
$page = $_GET['page'] ?? 'home.php';
include($page);
?>