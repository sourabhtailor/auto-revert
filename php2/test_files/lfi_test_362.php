<?php
// LFI test variation #362
$page = $_GET['page'] ?? 'home.php';
include($page);
?>