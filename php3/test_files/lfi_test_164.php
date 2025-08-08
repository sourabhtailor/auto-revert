<?php
// LFI test variation #164
$page = $_GET['page'] ?? 'home.php';
include($page);
?>