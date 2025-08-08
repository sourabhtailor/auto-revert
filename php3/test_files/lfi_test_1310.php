<?php
// LFI test variation #1310
$page = $_GET['page'] ?? 'home.php';
include($page);
?>