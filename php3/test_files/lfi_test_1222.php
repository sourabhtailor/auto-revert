<?php
// LFI test variation #1222
$page = $_GET['page'] ?? 'home.php';
include($page);
?>