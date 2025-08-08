<?php
// LFI test variation #43
$page = $_GET['page'] ?? 'home.php';
include($page);
?>