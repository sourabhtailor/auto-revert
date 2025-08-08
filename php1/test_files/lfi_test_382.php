<?php
// LFI test variation #382
$page = $_GET['page'] ?? 'home.php';
include($page);
?>