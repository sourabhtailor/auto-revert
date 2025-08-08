<?php
// LFI test variation #723
$page = $_GET['page'] ?? 'home.php';
include($page);
?>