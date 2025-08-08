<?php
// LFI test variation #1344
$page = $_GET['page'] ?? 'home.php';
include($page);
?>