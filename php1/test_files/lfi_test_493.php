<?php
// LFI test variation #493
$page = $_GET['page'] ?? 'home.php';
include($page);
?>