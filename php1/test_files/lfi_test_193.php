<?php
// LFI test variation #193
$page = $_GET['page'] ?? 'home.php';
include($page);
?>