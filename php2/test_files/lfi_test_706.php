<?php
// LFI test variation #706
$page = $_GET['page'] ?? 'home.php';
include($page);
?>