<?php
// LFI test variation #574
$page = $_GET['page'] ?? 'home.php';
include($page);
?>