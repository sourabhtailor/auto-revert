<?php
// LFI test variation #495
$page = $_GET['page'] ?? 'home.php';
include($page);
?>