<?php
// LFI test variation #1207
$page = $_GET['page'] ?? 'home.php';
include($page);
?>