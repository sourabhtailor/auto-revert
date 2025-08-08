<?php
// LFI test variation #295
$page = $_GET['page'] ?? 'home.php';
include($page);
?>