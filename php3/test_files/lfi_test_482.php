<?php
// LFI test variation #482
$page = $_GET['page'] ?? 'home.php';
include($page);
?>