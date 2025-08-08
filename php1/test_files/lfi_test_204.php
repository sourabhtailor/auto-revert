<?php
// LFI test variation #204
$page = $_GET['page'] ?? 'home.php';
include($page);
?>