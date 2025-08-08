<?php
// LFI test variation #1193
$page = $_GET['page'] ?? 'home.php';
include($page);
?>