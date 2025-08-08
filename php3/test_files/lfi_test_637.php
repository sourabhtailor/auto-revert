<?php
// LFI test variation #637
$page = $_GET['page'] ?? 'home.php';
include($page);
?>