<?php
// LFI test variation #330
$page = $_GET['page'] ?? 'home.php';
include($page);
?>