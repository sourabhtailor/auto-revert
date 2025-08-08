<?php
// LFI test variation #1321
$page = $_GET['page'] ?? 'home.php';
include($page);
?>