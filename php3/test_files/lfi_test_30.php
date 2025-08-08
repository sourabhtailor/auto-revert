<?php
// LFI test variation #30
$page = $_GET['page'] ?? 'home.php';
include($page);
?>