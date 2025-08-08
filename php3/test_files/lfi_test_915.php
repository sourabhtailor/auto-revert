<?php
// LFI test variation #915
$page = $_GET['page'] ?? 'home.php';
include($page);
?>