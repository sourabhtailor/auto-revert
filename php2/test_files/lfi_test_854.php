<?php
// LFI test variation #854
$page = $_GET['page'] ?? 'home.php';
include($page);
?>