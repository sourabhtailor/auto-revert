<?php
// LFI test variation #1352
$page = $_GET['page'] ?? 'home.php';
include($page);
?>