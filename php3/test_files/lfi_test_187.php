<?php
// LFI test variation #187
$page = $_GET['page'] ?? 'home.php';
include($page);
?>