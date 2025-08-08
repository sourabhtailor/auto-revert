<?php
// LFI test variation #1335
$page = $_GET['page'] ?? 'home.php';
include($page);
?>