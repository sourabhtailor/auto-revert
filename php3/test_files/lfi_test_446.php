<?php
// LFI test variation #446
$page = $_GET['page'] ?? 'home.php';
include($page);
?>