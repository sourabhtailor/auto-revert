<?php
// LFI test variation #543
$page = $_GET['page'] ?? 'home.php';
include($page);
?>