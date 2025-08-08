<?php
// LFI test variation #571
$page = $_GET['page'] ?? 'home.php';
include($page);
?>