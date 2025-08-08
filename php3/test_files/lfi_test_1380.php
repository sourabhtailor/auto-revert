<?php
// LFI test variation #1380
$page = $_GET['page'] ?? 'home.php';
include($page);
?>