<?php
// LFI test variation #1113
$page = $_GET['page'] ?? 'home.php';
include($page);
?>