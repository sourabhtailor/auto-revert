<?php
// LFI test variation #448
$page = $_GET['page'] ?? 'home.php';
include($page);
?>