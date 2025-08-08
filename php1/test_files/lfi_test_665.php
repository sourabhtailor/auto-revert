<?php
// LFI test variation #665
$page = $_GET['page'] ?? 'home.php';
include($page);
?>