<?php
// LFI test variation #581
$page = $_GET['page'] ?? 'home.php';
include($page);
?>