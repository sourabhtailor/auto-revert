<?php
// LFI test variation #932
$page = $_GET['page'] ?? 'home.php';
include($page);
?>