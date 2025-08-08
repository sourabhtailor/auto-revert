<?php
// LFI test variation #954
$page = $_GET['page'] ?? 'home.php';
include($page);
?>