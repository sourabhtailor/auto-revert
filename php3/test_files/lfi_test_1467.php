<?php
// LFI test variation #1467
$page = $_GET['page'] ?? 'home.php';
include($page);
?>