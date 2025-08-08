<?php
// LFI test variation #337
$page = $_GET['page'] ?? 'home.php';
include($page);
?>