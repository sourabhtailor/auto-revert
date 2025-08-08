<?php
// LFI test variation #743
$page = $_GET['page'] ?? 'home.php';
include($page);
?>