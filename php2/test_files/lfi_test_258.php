<?php
// LFI test variation #258
$page = $_GET['page'] ?? 'home.php';
include($page);
?>