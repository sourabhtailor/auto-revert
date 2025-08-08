<?php
// LFI test variation #1202
$page = $_GET['page'] ?? 'home.php';
include($page);
?>