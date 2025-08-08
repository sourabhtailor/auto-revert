<?php
// LFI test variation #945
$page = $_GET['page'] ?? 'home.php';
include($page);
?>