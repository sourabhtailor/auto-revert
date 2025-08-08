<?php
// LFI test variation #425
$page = $_GET['page'] ?? 'home.php';
include($page);
?>