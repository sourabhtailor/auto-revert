<?php
// LFI test variation #1095
$page = $_GET['page'] ?? 'home.php';
include($page);
?>