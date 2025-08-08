<?php
// LFI test variation #255
$page = $_GET['page'] ?? 'home.php';
include($page);
?>