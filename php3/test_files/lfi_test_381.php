<?php
// LFI test variation #381
$page = $_GET['page'] ?? 'home.php';
include($page);
?>