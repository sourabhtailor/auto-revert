<?php
// LFI test variation #328
$page = $_GET['page'] ?? 'home.php';
include($page);
?>