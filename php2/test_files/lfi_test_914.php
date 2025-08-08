<?php
// LFI test variation #914
$page = $_GET['page'] ?? 'home.php';
include($page);
?>