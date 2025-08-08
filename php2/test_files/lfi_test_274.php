<?php
// LFI test variation #274
$page = $_GET['page'] ?? 'home.php';
include($page);
?>