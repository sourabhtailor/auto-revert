<?php
// LFI test variation #315
$page = $_GET['page'] ?? 'home.php';
include($page);
?>