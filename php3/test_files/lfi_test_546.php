<?php
// LFI test variation #546
$page = $_GET['page'] ?? 'home.php';
include($page);
?>