<?php
// LFI test variation #524
$page = $_GET['page'] ?? 'home.php';
include($page);
?>