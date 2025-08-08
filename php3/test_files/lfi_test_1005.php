<?php
// LFI test variation #1005
$page = $_GET['page'] ?? 'home.php';
include($page);
?>