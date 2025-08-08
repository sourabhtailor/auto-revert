<?php
// LFI test variation #767
$page = $_GET['page'] ?? 'home.php';
include($page);
?>