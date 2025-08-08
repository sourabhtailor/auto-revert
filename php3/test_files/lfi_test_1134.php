<?php
// LFI test variation #1134
$page = $_GET['page'] ?? 'home.php';
include($page);
?>