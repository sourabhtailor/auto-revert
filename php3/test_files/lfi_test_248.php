<?php
// LFI test variation #248
$page = $_GET['page'] ?? 'home.php';
include($page);
?>