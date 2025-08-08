<?php
// LFI test variation #825
$page = $_GET['page'] ?? 'home.php';
include($page);
?>