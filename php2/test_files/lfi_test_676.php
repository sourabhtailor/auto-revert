<?php
// LFI test variation #676
$page = $_GET['page'] ?? 'home.php';
include($page);
?>