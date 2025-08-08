<?php
// LFI test variation #449
$page = $_GET['page'] ?? 'home.php';
include($page);
?>