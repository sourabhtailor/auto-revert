<?php
// LFI test variation #1046
$page = $_GET['page'] ?? 'home.php';
include($page);
?>