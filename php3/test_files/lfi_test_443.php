<?php
// LFI test variation #443
$page = $_GET['page'] ?? 'home.php';
include($page);
?>