<?php
// LFI test variation #307
$page = $_GET['page'] ?? 'home.php';
include($page);
?>