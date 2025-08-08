<?php
// LFI test variation #253
$page = $_GET['page'] ?? 'home.php';
include($page);
?>