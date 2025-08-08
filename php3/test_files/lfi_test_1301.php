<?php
// LFI test variation #1301
$page = $_GET['page'] ?? 'home.php';
include($page);
?>