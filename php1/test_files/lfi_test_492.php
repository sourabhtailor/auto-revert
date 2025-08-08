<?php
// LFI test variation #492
$page = $_GET['page'] ?? 'home.php';
include($page);
?>