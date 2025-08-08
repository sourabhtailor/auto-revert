<?php
// LFI test variation #218
$page = $_GET['page'] ?? 'home.php';
include($page);
?>