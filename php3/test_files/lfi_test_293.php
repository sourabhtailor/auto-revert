<?php
// LFI test variation #293
$page = $_GET['page'] ?? 'home.php';
include($page);
?>