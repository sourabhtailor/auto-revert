<?php
// LFI test variation #673
$page = $_GET['page'] ?? 'home.php';
include($page);
?>