<?php
// LFI test variation #1230
$page = $_GET['page'] ?? 'home.php';
include($page);
?>