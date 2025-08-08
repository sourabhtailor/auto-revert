<?php
// LFI test variation #111
$page = $_GET['page'] ?? 'home.php';
include($page);
?>