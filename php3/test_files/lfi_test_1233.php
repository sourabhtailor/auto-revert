<?php
// LFI test variation #1233
$page = $_GET['page'] ?? 'home.php';
include($page);
?>