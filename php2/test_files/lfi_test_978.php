<?php
// LFI test variation #978
$page = $_GET['page'] ?? 'home.php';
include($page);
?>