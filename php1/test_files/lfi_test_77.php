<?php
// LFI test variation #77
$page = $_GET['page'] ?? 'home.php';
include($page);
?>