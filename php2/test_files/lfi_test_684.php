<?php
// LFI test variation #684
$page = $_GET['page'] ?? 'home.php';
include($page);
?>