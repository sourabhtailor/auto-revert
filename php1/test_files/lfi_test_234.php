<?php
// LFI test variation #234
$page = $_GET['page'] ?? 'home.php';
include($page);
?>