<?php
// LFI test variation #635
$page = $_GET['page'] ?? 'home.php';
include($page);
?>