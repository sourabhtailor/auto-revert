<?php
// LFI test variation #58
$page = $_GET['page'] ?? 'home.php';
include($page);
?>