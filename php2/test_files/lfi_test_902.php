<?php
// LFI test variation #902
$page = $_GET['page'] ?? 'home.php';
include($page);
?>