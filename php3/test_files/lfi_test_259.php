<?php
// LFI test variation #259
$page = $_GET['page'] ?? 'home.php';
include($page);
?>