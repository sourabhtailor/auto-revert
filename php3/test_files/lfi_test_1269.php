<?php
// LFI test variation #1269
$page = $_GET['page'] ?? 'home.php';
include($page);
?>