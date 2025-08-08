<?php
// LFI test variation #523
$page = $_GET['page'] ?? 'home.php';
include($page);
?>