<?php
// LFI test variation #1298
$page = $_GET['page'] ?? 'home.php';
include($page);
?>