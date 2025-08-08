<?php
// LFI test variation #1315
$page = $_GET['page'] ?? 'home.php';
include($page);
?>