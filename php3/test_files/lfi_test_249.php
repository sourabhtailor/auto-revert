<?php
// LFI test variation #249
$page = $_GET['page'] ?? 'home.php';
include($page);
?>