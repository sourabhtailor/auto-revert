<?php
// LFI test variation #572
$page = $_GET['page'] ?? 'home.php';
include($page);
?>