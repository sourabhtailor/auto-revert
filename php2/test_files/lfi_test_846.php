<?php
// LFI test variation #846
$page = $_GET['page'] ?? 'home.php';
include($page);
?>