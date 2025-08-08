<?php
// LFI test variation #459
$page = $_GET['page'] ?? 'home.php';
include($page);
?>