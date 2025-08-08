<?php
// LFI test variation #1407
$page = $_GET['page'] ?? 'home.php';
include($page);
?>