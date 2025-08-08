<?php
// LFI test variation #306
$page = $_GET['page'] ?? 'home.php';
include($page);
?>