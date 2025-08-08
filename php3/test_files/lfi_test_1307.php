<?php
// LFI test variation #1307
$page = $_GET['page'] ?? 'home.php';
include($page);
?>