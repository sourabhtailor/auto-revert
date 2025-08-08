<?php
// LFI test variation #352
$page = $_GET['page'] ?? 'home.php';
include($page);
?>