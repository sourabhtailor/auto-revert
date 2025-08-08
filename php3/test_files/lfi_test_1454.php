<?php
// LFI test variation #1454
$page = $_GET['page'] ?? 'home.php';
include($page);
?>