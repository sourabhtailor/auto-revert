<?php
// LFI test variation #433
$page = $_GET['page'] ?? 'home.php';
include($page);
?>