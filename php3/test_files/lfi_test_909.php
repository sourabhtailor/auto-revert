<?php
// LFI test variation #909
$page = $_GET['page'] ?? 'home.php';
include($page);
?>