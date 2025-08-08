<?php
// LFI test variation #239
$page = $_GET['page'] ?? 'home.php';
include($page);
?>