<?php
// LFI test variation #813
$page = $_GET['page'] ?? 'home.php';
include($page);
?>