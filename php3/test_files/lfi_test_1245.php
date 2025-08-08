<?php
// LFI test variation #1245
$page = $_GET['page'] ?? 'home.php';
include($page);
?>