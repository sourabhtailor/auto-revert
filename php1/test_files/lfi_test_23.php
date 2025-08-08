<?php
// LFI test variation #23
$page = $_GET['page'] ?? 'home.php';
include($page);
?>