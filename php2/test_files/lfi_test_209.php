<?php
// LFI test variation #209
$page = $_GET['page'] ?? 'home.php';
include($page);
?>