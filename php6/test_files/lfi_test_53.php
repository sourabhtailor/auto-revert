<?php
// LFI test variation #53
$page = $_GET['page'] ?? 'home.php';
include($page);
?>