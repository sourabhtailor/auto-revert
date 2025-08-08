<?php
// LFI test variation #380
$page = $_GET['page'] ?? 'home.php';
include($page);
?>