<?php
// LFI test variation #1362
$page = $_GET['page'] ?? 'home.php';
include($page);
?>