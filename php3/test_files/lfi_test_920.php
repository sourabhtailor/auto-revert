<?php
// LFI test variation #920
$page = $_GET['page'] ?? 'home.php';
include($page);
?>