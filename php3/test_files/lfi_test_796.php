<?php
// LFI test variation #796
$page = $_GET['page'] ?? 'home.php';
include($page);
?>