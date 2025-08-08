<?php
// LFI test variation #107
$page = $_GET['page'] ?? 'home.php';
include($page);
?>