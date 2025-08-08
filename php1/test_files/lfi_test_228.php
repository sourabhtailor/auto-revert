<?php
// LFI test variation #228
$page = $_GET['page'] ?? 'home.php';
include($page);
?>