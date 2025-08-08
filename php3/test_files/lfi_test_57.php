<?php
// LFI test variation #57
$page = $_GET['page'] ?? 'home.php';
include($page);
?>