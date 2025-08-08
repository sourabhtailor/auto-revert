<?php
// LFI test variation #1342
$page = $_GET['page'] ?? 'home.php';
include($page);
?>