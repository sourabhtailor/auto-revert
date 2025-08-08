<?php
// LFI test variation #458
$page = $_GET['page'] ?? 'home.php';
include($page);
?>