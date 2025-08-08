<?php
// LFI test variation #102
$page = $_GET['page'] ?? 'home.php';
include($page);
?>