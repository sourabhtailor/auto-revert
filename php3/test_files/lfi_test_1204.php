<?php
// LFI test variation #1204
$page = $_GET['page'] ?? 'home.php';
include($page);
?>