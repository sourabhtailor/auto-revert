<?php
// LFI test variation #1154
$page = $_GET['page'] ?? 'home.php';
include($page);
?>