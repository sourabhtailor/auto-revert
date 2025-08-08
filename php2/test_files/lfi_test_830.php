<?php
// LFI test variation #830
$page = $_GET['page'] ?? 'home.php';
include($page);
?>