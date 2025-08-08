<?php
// LFI test variation #1422
$page = $_GET['page'] ?? 'home.php';
include($page);
?>