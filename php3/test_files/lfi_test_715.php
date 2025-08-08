<?php
// LFI test variation #715
$page = $_GET['page'] ?? 'home.php';
include($page);
?>