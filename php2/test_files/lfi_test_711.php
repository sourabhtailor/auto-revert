<?php
// LFI test variation #711
$page = $_GET['page'] ?? 'home.php';
include($page);
?>