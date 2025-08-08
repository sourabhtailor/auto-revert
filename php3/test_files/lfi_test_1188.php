<?php
// LFI test variation #1188
$page = $_GET['page'] ?? 'home.php';
include($page);
?>