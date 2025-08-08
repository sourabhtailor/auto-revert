<?php
// LFI test variation #429
$page = $_GET['page'] ?? 'home.php';
include($page);
?>