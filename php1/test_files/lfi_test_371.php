<?php
// LFI test variation #371
$page = $_GET['page'] ?? 'home.php';
include($page);
?>