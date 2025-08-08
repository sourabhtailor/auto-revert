<?php
// LFI test variation #432
$page = $_GET['page'] ?? 'home.php';
include($page);
?>