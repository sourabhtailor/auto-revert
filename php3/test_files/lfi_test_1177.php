<?php
// LFI test variation #1177
$page = $_GET['page'] ?? 'home.php';
include($page);
?>