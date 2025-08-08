<?php
// LFI test variation #1330
$page = $_GET['page'] ?? 'home.php';
include($page);
?>