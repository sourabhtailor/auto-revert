<?php
// LFI test variation #735
$page = $_GET['page'] ?? 'home.php';
include($page);
?>