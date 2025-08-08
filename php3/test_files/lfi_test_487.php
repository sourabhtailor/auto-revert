<?php
// LFI test variation #487
$page = $_GET['page'] ?? 'home.php';
include($page);
?>