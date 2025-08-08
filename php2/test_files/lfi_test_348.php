<?php
// LFI test variation #348
$page = $_GET['page'] ?? 'home.php';
include($page);
?>