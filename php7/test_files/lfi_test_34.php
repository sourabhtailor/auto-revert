<?php
// LFI test variation #34
$page = $_GET['page'] ?? 'home.php';
include($page);
?>