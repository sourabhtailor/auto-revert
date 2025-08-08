<?php
// LFI test variation #848
$page = $_GET['page'] ?? 'home.php';
include($page);
?>