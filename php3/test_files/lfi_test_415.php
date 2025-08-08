<?php
// LFI test variation #415
$page = $_GET['page'] ?? 'home.php';
include($page);
?>