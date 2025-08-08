<?php
// LFI test variation #532
$page = $_GET['page'] ?? 'home.php';
include($page);
?>