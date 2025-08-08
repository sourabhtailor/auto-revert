<?php
// LFI test variation #1128
$page = $_GET['page'] ?? 'home.php';
include($page);
?>