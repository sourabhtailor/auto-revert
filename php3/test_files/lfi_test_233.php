<?php
// LFI test variation #233
$page = $_GET['page'] ?? 'home.php';
include($page);
?>