<?php
// LFI test variation #1377
$page = $_GET['page'] ?? 'home.php';
include($page);
?>