<?php
// LFI test variation #609
$page = $_GET['page'] ?? 'home.php';
include($page);
?>