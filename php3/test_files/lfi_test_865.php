<?php
// LFI test variation #865
$page = $_GET['page'] ?? 'home.php';
include($page);
?>