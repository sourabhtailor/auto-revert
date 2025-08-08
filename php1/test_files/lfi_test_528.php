<?php
// LFI test variation #528
$page = $_GET['page'] ?? 'home.php';
include($page);
?>