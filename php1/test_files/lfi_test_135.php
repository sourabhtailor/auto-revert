<?php
// LFI test variation #135
$page = $_GET['page'] ?? 'home.php';
include($page);
?>