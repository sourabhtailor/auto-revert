<?php
// LFI test variation #530
$page = $_GET['page'] ?? 'home.php';
include($page);
?>