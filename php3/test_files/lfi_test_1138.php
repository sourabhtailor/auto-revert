<?php
// LFI test variation #1138
$page = $_GET['page'] ?? 'home.php';
include($page);
?>