<?php
// LFI test variation #1171
$page = $_GET['page'] ?? 'home.php';
include($page);
?>