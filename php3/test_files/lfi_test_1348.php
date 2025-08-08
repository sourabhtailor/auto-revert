<?php
// LFI test variation #1348
$page = $_GET['page'] ?? 'home.php';
include($page);
?>