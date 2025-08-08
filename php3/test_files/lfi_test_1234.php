<?php
// LFI test variation #1234
$page = $_GET['page'] ?? 'home.php';
include($page);
?>