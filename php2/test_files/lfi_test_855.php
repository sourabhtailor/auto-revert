<?php
// LFI test variation #855
$page = $_GET['page'] ?? 'home.php';
include($page);
?>