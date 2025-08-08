<?php
// LFI test variation #70
$page = $_GET['page'] ?? 'home.php';
include($page);
?>