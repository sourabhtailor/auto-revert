<?php
// LFI test variation #515
$page = $_GET['page'] ?? 'home.php';
include($page);
?>