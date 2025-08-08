<?php
// LFI test variation #910
$page = $_GET['page'] ?? 'home.php';
include($page);
?>