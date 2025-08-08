<?php
// LFI test variation #809
$page = $_GET['page'] ?? 'home.php';
include($page);
?>