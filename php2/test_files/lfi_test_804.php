<?php
// LFI test variation #804
$page = $_GET['page'] ?? 'home.php';
include($page);
?>