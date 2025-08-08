<?php
// LFI test variation #217
$page = $_GET['page'] ?? 'home.php';
include($page);
?>