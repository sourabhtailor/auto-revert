<?php
// LFI test variation #122
$page = $_GET['page'] ?? 'home.php';
include($page);
?>