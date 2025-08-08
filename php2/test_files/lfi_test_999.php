<?php
// LFI test variation #999
$page = $_GET['page'] ?? 'home.php';
include($page);
?>