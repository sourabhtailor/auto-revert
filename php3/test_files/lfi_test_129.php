<?php
// LFI test variation #129
$page = $_GET['page'] ?? 'home.php';
include($page);
?>