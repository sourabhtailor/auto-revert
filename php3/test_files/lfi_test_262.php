<?php
// LFI test variation #262
$page = $_GET['page'] ?? 'home.php';
include($page);
?>