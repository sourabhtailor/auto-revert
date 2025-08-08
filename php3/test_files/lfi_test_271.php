<?php
// LFI test variation #271
$page = $_GET['page'] ?? 'home.php';
include($page);
?>