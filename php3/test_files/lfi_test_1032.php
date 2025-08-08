<?php
// LFI test variation #1032
$page = $_GET['page'] ?? 'home.php';
include($page);
?>