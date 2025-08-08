<?php
// LFI test variation #979
$page = $_GET['page'] ?? 'home.php';
include($page);
?>