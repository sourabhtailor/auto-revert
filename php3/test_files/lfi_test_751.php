<?php
// LFI test variation #751
$page = $_GET['page'] ?? 'home.php';
include($page);
?>