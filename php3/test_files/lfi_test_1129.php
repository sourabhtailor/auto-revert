<?php
// LFI test variation #1129
$page = $_GET['page'] ?? 'home.php';
include($page);
?>