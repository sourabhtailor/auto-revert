<?php
// LFI test variation #1373
$page = $_GET['page'] ?? 'home.php';
include($page);
?>