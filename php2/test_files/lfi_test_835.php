<?php
// LFI test variation #835
$page = $_GET['page'] ?? 'home.php';
include($page);
?>