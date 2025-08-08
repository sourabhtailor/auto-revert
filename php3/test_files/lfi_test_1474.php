<?php
// LFI test variation #1474
$page = $_GET['page'] ?? 'home.php';
include($page);
?>