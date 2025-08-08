<?php
// LFI test variation #1486
$page = $_GET['page'] ?? 'home.php';
include($page);
?>