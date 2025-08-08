<?php
// LFI test variation #1343
$page = $_GET['page'] ?? 'home.php';
include($page);
?>