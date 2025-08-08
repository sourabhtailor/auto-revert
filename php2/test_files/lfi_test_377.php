<?php
// LFI test variation #377
$page = $_GET['page'] ?? 'home.php';
include($page);
?>