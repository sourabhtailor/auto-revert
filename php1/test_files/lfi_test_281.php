<?php
// LFI test variation #281
$page = $_GET['page'] ?? 'home.php';
include($page);
?>