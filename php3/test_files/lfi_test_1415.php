<?php
// LFI test variation #1415
$page = $_GET['page'] ?? 'home.php';
include($page);
?>