<?php
// LFI test variation #1127
$page = $_GET['page'] ?? 'home.php';
include($page);
?>