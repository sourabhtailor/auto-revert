<?php
// LFI test variation #140
$page = $_GET['page'] ?? 'home.php';
include($page);
?>