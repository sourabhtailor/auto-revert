<?php
// LFI test variation #540
$page = $_GET['page'] ?? 'home.php';
include($page);
?>