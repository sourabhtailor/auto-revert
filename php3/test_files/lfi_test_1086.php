<?php
// LFI test variation #1086
$page = $_GET['page'] ?? 'home.php';
include($page);
?>