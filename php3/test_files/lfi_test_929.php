<?php
// LFI test variation #929
$page = $_GET['page'] ?? 'home.php';
include($page);
?>