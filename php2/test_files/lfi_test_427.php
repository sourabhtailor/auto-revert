<?php
// LFI test variation #427
$page = $_GET['page'] ?? 'home.php';
include($page);
?>