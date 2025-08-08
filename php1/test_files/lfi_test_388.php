<?php
// LFI test variation #388
$page = $_GET['page'] ?? 'home.php';
include($page);
?>