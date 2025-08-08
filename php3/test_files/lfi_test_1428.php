<?php
// LFI test variation #1428
$page = $_GET['page'] ?? 'home.php';
include($page);
?>