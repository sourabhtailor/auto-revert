<?php
// LFI test variation #216
$page = $_GET['page'] ?? 'home.php';
include($page);
?>