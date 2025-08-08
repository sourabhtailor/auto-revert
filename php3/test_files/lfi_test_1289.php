<?php
// LFI test variation #1289
$page = $_GET['page'] ?? 'home.php';
include($page);
?>