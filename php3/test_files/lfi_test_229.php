<?php
// LFI test variation #229
$page = $_GET['page'] ?? 'home.php';
include($page);
?>