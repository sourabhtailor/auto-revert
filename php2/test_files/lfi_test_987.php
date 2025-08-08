<?php
// LFI test variation #987
$page = $_GET['page'] ?? 'home.php';
include($page);
?>