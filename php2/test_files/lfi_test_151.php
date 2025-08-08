<?php
// LFI test variation #151
$page = $_GET['page'] ?? 'home.php';
include($page);
?>