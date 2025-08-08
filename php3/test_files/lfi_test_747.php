<?php
// LFI test variation #747
$page = $_GET['page'] ?? 'home.php';
include($page);
?>