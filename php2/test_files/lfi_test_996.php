<?php
// LFI test variation #996
$page = $_GET['page'] ?? 'home.php';
include($page);
?>