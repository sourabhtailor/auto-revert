<?php
// LFI test variation #1325
$page = $_GET['page'] ?? 'home.php';
include($page);
?>