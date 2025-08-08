<?php
// LFI test variation #273
$page = $_GET['page'] ?? 'home.php';
include($page);
?>