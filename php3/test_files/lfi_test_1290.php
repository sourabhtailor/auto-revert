<?php
// LFI test variation #1290
$page = $_GET['page'] ?? 'home.php';
include($page);
?>