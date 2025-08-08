<?php
// LFI test variation #61
$page = $_GET['page'] ?? 'home.php';
include($page);
?>