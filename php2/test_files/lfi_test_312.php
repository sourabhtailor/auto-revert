<?php
// LFI test variation #312
$page = $_GET['page'] ?? 'home.php';
include($page);
?>