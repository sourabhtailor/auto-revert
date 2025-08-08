<?php
// LFI test variation #320
$page = $_GET['page'] ?? 'home.php';
include($page);
?>