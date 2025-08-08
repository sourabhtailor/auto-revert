<?php
// LFI test variation #1432
$page = $_GET['page'] ?? 'home.php';
include($page);
?>