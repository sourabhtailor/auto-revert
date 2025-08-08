<?php
// LFI test variation #235
$page = $_GET['page'] ?? 'home.php';
include($page);
?>