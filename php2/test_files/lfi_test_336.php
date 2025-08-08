<?php
// LFI test variation #336
$page = $_GET['page'] ?? 'home.php';
include($page);
?>