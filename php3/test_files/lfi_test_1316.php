<?php
// LFI test variation #1316
$page = $_GET['page'] ?? 'home.php';
include($page);
?>