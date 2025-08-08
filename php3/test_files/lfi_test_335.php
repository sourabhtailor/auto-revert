<?php
// LFI test variation #335
$page = $_GET['page'] ?? 'home.php';
include($page);
?>