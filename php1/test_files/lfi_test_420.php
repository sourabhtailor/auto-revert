<?php
// LFI test variation #420
$page = $_GET['page'] ?? 'home.php';
include($page);
?>