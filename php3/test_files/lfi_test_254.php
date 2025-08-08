<?php
// LFI test variation #254
$page = $_GET['page'] ?? 'home.php';
include($page);
?>