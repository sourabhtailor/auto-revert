<?php
// LFI test variation #752
$page = $_GET['page'] ?? 'home.php';
include($page);
?>