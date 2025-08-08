<?php
// LFI test variation #808
$page = $_GET['page'] ?? 'home.php';
include($page);
?>