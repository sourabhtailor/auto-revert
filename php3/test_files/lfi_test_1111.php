<?php
// LFI test variation #1111
$page = $_GET['page'] ?? 'home.php';
include($page);
?>