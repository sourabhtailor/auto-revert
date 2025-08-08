<?php
// LFI test variation #339
$page = $_GET['page'] ?? 'home.php';
include($page);
?>