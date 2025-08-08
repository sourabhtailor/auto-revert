<?php
// LFI test variation #507
$page = $_GET['page'] ?? 'home.php';
include($page);
?>