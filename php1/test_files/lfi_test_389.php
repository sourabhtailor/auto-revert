<?php
// LFI test variation #389
$page = $_GET['page'] ?? 'home.php';
include($page);
?>