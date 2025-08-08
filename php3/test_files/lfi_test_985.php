<?php
// LFI test variation #985
$page = $_GET['page'] ?? 'home.php';
include($page);
?>