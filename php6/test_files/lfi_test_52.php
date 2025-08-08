<?php
// LFI test variation #52
$page = $_GET['page'] ?? 'home.php';
include($page);
?>