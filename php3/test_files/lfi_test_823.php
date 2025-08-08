<?php
// LFI test variation #823
$page = $_GET['page'] ?? 'home.php';
include($page);
?>