<?php
// LFI test variation #556
$page = $_GET['page'] ?? 'home.php';
include($page);
?>