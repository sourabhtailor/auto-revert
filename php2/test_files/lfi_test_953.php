<?php
// LFI test variation #953
$page = $_GET['page'] ?? 'home.php';
include($page);
?>