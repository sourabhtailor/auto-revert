<?php
// LFI test variation #340
$page = $_GET['page'] ?? 'home.php';
include($page);
?>