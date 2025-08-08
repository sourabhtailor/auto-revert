<?php
// LFI test variation #1213
$page = $_GET['page'] ?? 'home.php';
include($page);
?>