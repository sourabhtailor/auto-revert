<?php
// LFI test variation #153
$page = $_GET['page'] ?? 'home.php';
include($page);
?>