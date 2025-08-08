<?php
// LFI test variation #418
$page = $_GET['page'] ?? 'home.php';
include($page);
?>