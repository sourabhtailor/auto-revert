<?php
// LFI test variation #398
$page = $_GET['page'] ?? 'home.php';
include($page);
?>