<?php
// LFI test variation #805
$page = $_GET['page'] ?? 'home.php';
include($page);
?>