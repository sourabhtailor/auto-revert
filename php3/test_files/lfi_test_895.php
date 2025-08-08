<?php
// LFI test variation #895
$page = $_GET['page'] ?? 'home.php';
include($page);
?>