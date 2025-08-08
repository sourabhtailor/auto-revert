<?php
// LFI test variation #1337
$page = $_GET['page'] ?? 'home.php';
include($page);
?>