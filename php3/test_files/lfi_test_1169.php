<?php
// LFI test variation #1169
$page = $_GET['page'] ?? 'home.php';
include($page);
?>