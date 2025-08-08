<?php
// LFI test variation #17
$page = $_GET['page'] ?? 'home.php';
include($page);
?>