<?php
// LFI test variation #1061
$page = $_GET['page'] ?? 'home.php';
include($page);
?>