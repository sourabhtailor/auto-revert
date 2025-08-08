<?php
// LFI test variation #365
$page = $_GET['page'] ?? 'home.php';
include($page);
?>