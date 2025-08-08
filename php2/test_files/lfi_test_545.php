<?php
// LFI test variation #545
$page = $_GET['page'] ?? 'home.php';
include($page);
?>