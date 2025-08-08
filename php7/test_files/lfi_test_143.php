<?php
// LFI test variation #143
$page = $_GET['page'] ?? 'home.php';
include($page);
?>