<?php
// LFI test variation #794
$page = $_GET['page'] ?? 'home.php';
include($page);
?>