<?php
// LFI test variation #633
$page = $_GET['page'] ?? 'home.php';
include($page);
?>