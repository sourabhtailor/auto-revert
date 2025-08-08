<?php
// LFI test variation #1062
$page = $_GET['page'] ?? 'home.php';
include($page);
?>