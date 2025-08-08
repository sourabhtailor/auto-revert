<?php
// LFI test variation #939
$page = $_GET['page'] ?? 'home.php';
include($page);
?>