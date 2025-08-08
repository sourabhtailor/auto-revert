<?php
// LFI test variation #29
$page = $_GET['page'] ?? 'home.php';
include($page);
?>