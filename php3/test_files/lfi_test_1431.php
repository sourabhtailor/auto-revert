<?php
// LFI test variation #1431
$page = $_GET['page'] ?? 'home.php';
include($page);
?>