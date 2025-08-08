<?php
// LFI test variation #704
$page = $_GET['page'] ?? 'home.php';
include($page);
?>