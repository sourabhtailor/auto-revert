<?php
// LFI test variation #291
$page = $_GET['page'] ?? 'home.php';
include($page);
?>