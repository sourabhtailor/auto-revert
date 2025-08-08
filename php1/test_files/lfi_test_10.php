<?php
// LFI test variation #10
$page = $_GET['page'] ?? 'home.php';
include($page);
?>