<?php
// LFI test variation #441
$page = $_GET['page'] ?? 'home.php';
include($page);
?>