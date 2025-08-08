<?php
// LFI test variation #1229
$page = $_GET['page'] ?? 'home.php';
include($page);
?>