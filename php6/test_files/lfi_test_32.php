<?php
// LFI test variation #32
$page = $_GET['page'] ?? 'home.php';
include($page);
?>