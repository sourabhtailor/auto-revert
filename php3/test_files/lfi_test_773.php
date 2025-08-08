<?php
// LFI test variation #773
$page = $_GET['page'] ?? 'home.php';
include($page);
?>