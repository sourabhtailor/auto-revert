<?php
// LFI test variation #1425
$page = $_GET['page'] ?? 'home.php';
include($page);
?>