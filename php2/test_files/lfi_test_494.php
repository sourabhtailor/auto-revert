<?php
// LFI test variation #494
$page = $_GET['page'] ?? 'home.php';
include($page);
?>