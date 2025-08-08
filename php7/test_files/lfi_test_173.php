<?php
// LFI test variation #173
$page = $_GET['page'] ?? 'home.php';
include($page);
?>