<?php
// LFI test variation #800
$page = $_GET['page'] ?? 'home.php';
include($page);
?>