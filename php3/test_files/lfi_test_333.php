<?php
// LFI test variation #333
$page = $_GET['page'] ?? 'home.php';
include($page);
?>