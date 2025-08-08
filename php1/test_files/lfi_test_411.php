<?php
// LFI test variation #411
$page = $_GET['page'] ?? 'home.php';
include($page);
?>