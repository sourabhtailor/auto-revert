<?php
// LFI test variation #784
$page = $_GET['page'] ?? 'home.php';
include($page);
?>