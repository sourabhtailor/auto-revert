<?php
// LFI test variation #652
$page = $_GET['page'] ?? 'home.php';
include($page);
?>