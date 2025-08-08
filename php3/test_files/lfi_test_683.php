<?php
// LFI test variation #683
$page = $_GET['page'] ?? 'home.php';
include($page);
?>