<?php
// LFI test variation #1011
$page = $_GET['page'] ?? 'home.php';
include($page);
?>