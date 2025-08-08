<?php
// LFI test variation #66
$page = $_GET['page'] ?? 'home.php';
include($page);
?>