<?php
// LFI test variation #16
$page = $_GET['page'] ?? 'home.php';
include($page);
?>