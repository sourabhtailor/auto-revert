<?php
// LFI test variation #201
$page = $_GET['page'] ?? 'home.php';
include($page);
?>