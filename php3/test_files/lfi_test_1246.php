<?php
// LFI test variation #1246
$page = $_GET['page'] ?? 'home.php';
include($page);
?>