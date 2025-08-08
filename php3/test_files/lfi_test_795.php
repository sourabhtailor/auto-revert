<?php
// LFI test variation #795
$page = $_GET['page'] ?? 'home.php';
include($page);
?>