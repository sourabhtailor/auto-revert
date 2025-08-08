<?php
// LFI test variation #162
$page = $_GET['page'] ?? 'home.php';
include($page);
?>