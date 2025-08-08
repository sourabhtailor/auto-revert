<?php
// LFI test variation #834
$page = $_GET['page'] ?? 'home.php';
include($page);
?>