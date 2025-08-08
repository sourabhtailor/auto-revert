<?php
// LFI test variation #125
$page = $_GET['page'] ?? 'home.php';
include($page);
?>