<?php
// LFI test variation #431
$page = $_GET['page'] ?? 'home.php';
include($page);
?>