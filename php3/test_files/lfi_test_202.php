<?php
// LFI test variation #202
$page = $_GET['page'] ?? 'home.php';
include($page);
?>