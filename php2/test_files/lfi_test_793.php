<?php
// LFI test variation #793
$page = $_GET['page'] ?? 'home.php';
include($page);
?>