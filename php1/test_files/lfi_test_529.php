<?php
// LFI test variation #529
$page = $_GET['page'] ?? 'home.php';
include($page);
?>