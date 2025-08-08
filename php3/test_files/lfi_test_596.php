<?php
// LFI test variation #596
$page = $_GET['page'] ?? 'home.php';
include($page);
?>