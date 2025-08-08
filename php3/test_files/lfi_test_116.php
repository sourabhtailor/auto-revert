<?php
// LFI test variation #116
$page = $_GET['page'] ?? 'home.php';
include($page);
?>