<?php
// LFI test variation #155
$page = $_GET['page'] ?? 'home.php';
include($page);
?>