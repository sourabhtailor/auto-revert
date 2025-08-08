<?php
// LFI test variation #1185
$page = $_GET['page'] ?? 'home.php';
include($page);
?>