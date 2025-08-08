<?php
// LFI test variation #1365
$page = $_GET['page'] ?? 'home.php';
include($page);
?>