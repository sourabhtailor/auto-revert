<?php
// LFI test variation #128
$page = $_GET['page'] ?? 'home.php';
include($page);
?>