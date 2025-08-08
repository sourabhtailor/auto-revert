<?php
// LFI test variation #1333
$page = $_GET['page'] ?? 'home.php';
include($page);
?>