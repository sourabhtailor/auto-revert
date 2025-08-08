<?php
// LFI test variation #712
$page = $_GET['page'] ?? 'home.php';
include($page);
?>