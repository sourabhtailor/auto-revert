<?php
// LFI test variation #1096
$page = $_GET['page'] ?? 'home.php';
include($page);
?>