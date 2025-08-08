<?php
// LFI test variation #396
$page = $_GET['page'] ?? 'home.php';
include($page);
?>