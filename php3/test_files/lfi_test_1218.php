<?php
// LFI test variation #1218
$page = $_GET['page'] ?? 'home.php';
include($page);
?>