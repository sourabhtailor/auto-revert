<?php
// LFI test variation #505
$page = $_GET['page'] ?? 'home.php';
include($page);
?>