<?php
// LFI test variation #1145
$page = $_GET['page'] ?? 'home.php';
include($page);
?>