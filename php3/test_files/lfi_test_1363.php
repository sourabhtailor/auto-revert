<?php
// LFI test variation #1363
$page = $_GET['page'] ?? 'home.php';
include($page);
?>