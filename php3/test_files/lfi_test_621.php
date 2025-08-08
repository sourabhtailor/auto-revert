<?php
// LFI test variation #621
$page = $_GET['page'] ?? 'home.php';
include($page);
?>