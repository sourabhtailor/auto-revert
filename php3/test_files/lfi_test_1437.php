<?php
// LFI test variation #1437
$page = $_GET['page'] ?? 'home.php';
include($page);
?>