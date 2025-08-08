<?php
// LFI test variation #59
$page = $_GET['page'] ?? 'home.php';
include($page);
?>