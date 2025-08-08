<?php
// LFI test variation #272
$page = $_GET['page'] ?? 'home.php';
include($page);
?>