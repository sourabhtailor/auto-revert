<?php
// LFI test variation #412
$page = $_GET['page'] ?? 'home.php';
include($page);
?>