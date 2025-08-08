<?php
// LFI test variation #20
$page = $_GET['page'] ?? 'home.php';
include($page);
?>