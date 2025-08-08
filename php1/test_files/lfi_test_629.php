<?php
// LFI test variation #629
$page = $_GET['page'] ?? 'home.php';
include($page);
?>