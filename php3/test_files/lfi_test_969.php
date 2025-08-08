<?php
// LFI test variation #969
$page = $_GET['page'] ?? 'home.php';
include($page);
?>