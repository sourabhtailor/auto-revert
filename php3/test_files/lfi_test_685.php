<?php
// LFI test variation #685
$page = $_GET['page'] ?? 'home.php';
include($page);
?>