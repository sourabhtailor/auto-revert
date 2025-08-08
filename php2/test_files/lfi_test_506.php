<?php
// LFI test variation #506
$page = $_GET['page'] ?? 'home.php';
include($page);
?>