<?php
// LFI test variation #257
$page = $_GET['page'] ?? 'home.php';
include($page);
?>