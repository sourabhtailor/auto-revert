<?php
// LFI test variation #323
$page = $_GET['page'] ?? 'home.php';
include($page);
?>