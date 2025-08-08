<?php
// LFI test variation #553
$page = $_GET['page'] ?? 'home.php';
include($page);
?>