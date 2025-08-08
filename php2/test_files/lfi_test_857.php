<?php
// LFI test variation #857
$page = $_GET['page'] ?? 'home.php';
include($page);
?>