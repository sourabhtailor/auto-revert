<?php
// LFI test variation #63
$page = $_GET['page'] ?? 'home.php';
include($page);
?>