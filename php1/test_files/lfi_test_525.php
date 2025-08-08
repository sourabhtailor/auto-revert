<?php
// LFI test variation #525
$page = $_GET['page'] ?? 'home.php';
include($page);
?>