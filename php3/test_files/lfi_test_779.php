<?php
// LFI test variation #779
$page = $_GET['page'] ?? 'home.php';
include($page);
?>