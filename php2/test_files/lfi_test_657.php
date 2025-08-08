<?php
// LFI test variation #657
$page = $_GET['page'] ?? 'home.php';
include($page);
?>