<?php
// LFI test variation #883
$page = $_GET['page'] ?? 'home.php';
include($page);
?>