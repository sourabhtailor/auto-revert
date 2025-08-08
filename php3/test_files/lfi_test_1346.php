<?php
// LFI test variation #1346
$page = $_GET['page'] ?? 'home.php';
include($page);
?>