<?php
// LFI test variation #818
$page = $_GET['page'] ?? 'home.php';
include($page);
?>