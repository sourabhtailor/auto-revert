<?php
// LFI test variation #589
$page = $_GET['page'] ?? 'home.php';
include($page);
?>