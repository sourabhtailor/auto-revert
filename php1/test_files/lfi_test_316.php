<?php
// LFI test variation #316
$page = $_GET['page'] ?? 'home.php';
include($page);
?>