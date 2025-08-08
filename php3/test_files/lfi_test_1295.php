<?php
// LFI test variation #1295
$page = $_GET['page'] ?? 'home.php';
include($page);
?>