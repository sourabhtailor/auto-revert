<?php
// LFI test variation #952
$page = $_GET['page'] ?? 'home.php';
include($page);
?>