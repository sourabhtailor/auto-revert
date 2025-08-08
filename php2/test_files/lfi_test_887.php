<?php
// LFI test variation #887
$page = $_GET['page'] ?? 'home.php';
include($page);
?>