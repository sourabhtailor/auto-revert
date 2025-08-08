<?php
// LFI test variation #231
$page = $_GET['page'] ?? 'home.php';
include($page);
?>