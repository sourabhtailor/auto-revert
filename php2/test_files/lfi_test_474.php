<?php
// LFI test variation #474
$page = $_GET['page'] ?? 'home.php';
include($page);
?>