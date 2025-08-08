<?php
// LFI test variation #792
$page = $_GET['page'] ?? 'home.php';
include($page);
?>