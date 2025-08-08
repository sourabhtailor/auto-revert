<?php
// LFI test variation #68
$page = $_GET['page'] ?? 'home.php';
include($page);
?>