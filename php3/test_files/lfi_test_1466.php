<?php
// LFI test variation #1466
$page = $_GET['page'] ?? 'home.php';
include($page);
?>