<?php
// LFI test variation #410
$page = $_GET['page'] ?? 'home.php';
include($page);
?>