<?php
// LFI test variation #67
$page = $_GET['page'] ?? 'home.php';
include($page);
?>