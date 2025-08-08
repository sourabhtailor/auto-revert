<?php
// LFI test variation #713
$page = $_GET['page'] ?? 'home.php';
include($page);
?>