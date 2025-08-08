<?php
// LFI test variation #1319
$page = $_GET['page'] ?? 'home.php';
include($page);
?>