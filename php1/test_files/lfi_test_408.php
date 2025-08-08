<?php
// LFI test variation #408
$page = $_GET['page'] ?? 'home.php';
include($page);
?>