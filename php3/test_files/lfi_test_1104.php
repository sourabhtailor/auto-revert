<?php
// LFI test variation #1104
$page = $_GET['page'] ?? 'home.php';
include($page);
?>