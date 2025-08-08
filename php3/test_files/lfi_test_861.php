<?php
// LFI test variation #861
$page = $_GET['page'] ?? 'home.php';
include($page);
?>