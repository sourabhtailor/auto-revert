<?php
// LFI test variation #900
$page = $_GET['page'] ?? 'home.php';
include($page);
?>