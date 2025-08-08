<?php
// LFI test variation #866
$page = $_GET['page'] ?? 'home.php';
include($page);
?>