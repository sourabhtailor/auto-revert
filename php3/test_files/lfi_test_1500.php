<?php
// LFI test variation #1500
$page = $_GET['page'] ?? 'home.php';
include($page);
?>