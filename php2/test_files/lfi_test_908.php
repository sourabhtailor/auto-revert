<?php
// LFI test variation #908
$page = $_GET['page'] ?? 'home.php';
include($page);
?>