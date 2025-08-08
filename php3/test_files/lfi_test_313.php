<?php
// LFI test variation #313
$page = $_GET['page'] ?? 'home.php';
include($page);
?>