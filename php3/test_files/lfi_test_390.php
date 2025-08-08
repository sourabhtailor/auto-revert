<?php
// LFI test variation #390
$page = $_GET['page'] ?? 'home.php';
include($page);
?>