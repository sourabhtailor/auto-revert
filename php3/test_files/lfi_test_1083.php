<?php
// LFI test variation #1083
$page = $_GET['page'] ?? 'home.php';
include($page);
?>