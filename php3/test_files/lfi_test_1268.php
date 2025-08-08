<?php
// LFI test variation #1268
$page = $_GET['page'] ?? 'home.php';
include($page);
?>