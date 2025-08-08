<?php
// LFI test variation #907
$page = $_GET['page'] ?? 'home.php';
include($page);
?>