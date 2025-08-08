<?php
// LFI test variation #97
$page = $_GET['page'] ?? 'home.php';
include($page);
?>