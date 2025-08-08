<?php
// LFI test variation #1267
$page = $_GET['page'] ?? 'home.php';
include($page);
?>